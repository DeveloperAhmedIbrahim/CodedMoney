<?php

namespace App\Http\Controllers;

use App\Models\PaybisSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaybisController extends Controller
{
    protected $rsaSignature;
    protected $privateKey;

    public function __construct()
    {
        // $this->rsaSignature = $rsaSignature;
        $this->privateKey = env('PAYBIS_PRIVATE_KEY');
    }

    public function widgetRequest()
    {
        $data = array();

        $paybisUid = Auth::user()->paybis_uid;

        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://widget-api.sandbox.paybis.com/v2/request",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            'partnerUserId' => "{$paybisUid}",
            'locale' => 'en',
            'passwordless' => false,
            // 'cryptoPaymentMethod' => 'partner_controlled_with_sdk_event',
          ]),
          CURLOPT_HTTPHEADER => [
            "Authorization: {$this->privateKey}",
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
}
