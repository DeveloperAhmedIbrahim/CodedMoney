<?php

namespace App\Http\Controllers;

use App\Models\PaybisSession;
use App\Models\User;
use App\Services\RsaSignatureService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class PaybisController extends Controller
{
    protected $rsaSignature;
    protected $privateKey;
    protected $paybisBaseUrl;

    public function __construct(RsaSignatureService $rsaSignature)
    {
        $this->rsaSignature = $rsaSignature;
        $this->privateKey = Config::get('app.paybis.private_key');
        $this->paybisBaseUrl = Config::get('app.paybis.base_url');
    }

    public function widgetRequest()
    {
        $data = array();
        $email = Auth::user()->email;
        $paybisUid = Auth::user()->paybis_uid;

        $curl = curl_init();

        $requestBody = json_encode([
            'partnerUserId' => "{$paybisUid}",
            'email' => "{$email}",
            'locale' => 'en',
            'passwordless' => false,
        ]);

        $signature = $this->rsaSignature->signRequestBody($requestBody);

        curl_setopt_array($curl, [
          CURLOPT_URL => "{$this->paybisBaseUrl}/v2/request",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $requestBody,
          CURLOPT_HTTPHEADER => [
            "Authorization: {$this->privateKey}",
            "X-Request-Signature: {$signature}",
            "accept: application/json",
            "content-type: application/json"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $status = false;
            $message = "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, true);

            $paybisSession = new PaybisSession();
            $paybisSession->uid = Auth::user()->id;
            $paybisSession->paybis_uid = Auth::user()->paybis_uid;
            $paybisSession->request_id = $response["requestId"];
            $paybisSession->save();

            $status = true;
            $message = "Widget request get successfully.";
            $data = $response;
        }

        return response()->json([
            "status" => $status,
            "data" => $data,
            "message" => $message,
        ]);
    }

    public function rsaSignature()
    {
        $email = Auth::user()->email;
        $paybisUid = Auth::user()->paybis_uid;

        // Example request body.
        $requestBody = json_encode([
            'partnerUserId' => "{$paybisUid}",
            'email' => "{$email}",
            'locale' => 'en',
            'passwordless' => false,
        ]);

        $signature = $this->rsaSignature->signRequestBody($requestBody);

        return response()->json([
            "signature" => $signature,
            "requestBody" => $requestBody,
        ]);
    }

    public function profile(Request $request)
    {
        if($request->method() === "POST") {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users,email,'.Auth::user()->id.',id',
            ]);

            $user = User::find(Auth::user()->id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->save();

            return redirect()->route('profile')->with('success', 'Your profile info updated!');
        } else {
            $user = Auth::user();
            return view('profile', compact('user'));
        }
    }

    public function orders(Request $request)
    {
        $curl = curl_init();
        $requestBody = [
            'email' => Auth::user()->email,
            'partnerUserId' => Auth::user()->paybis_uid,
            'limit' => 1,
            'cursor' => $request->pointer ?? null,
        ];

        $signature = $this->rsaSignature->signRequestBody(json_encode($requestBody));

        curl_setopt_array($curl, [
            CURLOPT_URL => "{$this->paybisBaseUrl}/v2/transactions?".http_build_query($requestBody),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: {$this->privateKey}",
                "X-Request-Signature: {$signature}",
                "Accept: application/json",
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            dd("cURL Error #:" . $err);
        } else {
            $response = json_decode($response, true);
            $transactions = $response['data'];
            $prevPointer = $response["meta"]['currentCursor'];
            $nextPointer = $response["meta"]['nextCursor'];
            return view('orders', compact('transactions', 'prevPointer', 'nextPointer'));
        }
    }
}
