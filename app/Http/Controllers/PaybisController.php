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
        $paybisUid = time();

        $curl = curl_init();

        $requestBody = json_encode([
            'partnerUserId' => "{$paybisUid}",
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
            $status = true;
            $response = json_decode($response, true);
        }

        return response()->json([
            "status" => $status,
            "data" => $response,
            "message" => $message,
        ]);
    }

    public function rsaSignature()
    {
        $paybisUid = time();

        // Example request body.
        $requestBody = json_encode([
            'partnerUserId' => "{$paybisUid}",
            'locale' => 'en',
            'passwordless' => false,
        ]);

        $signature = $this->rsaSignature->signRequestBody($requestBody);

        return response()->json([
            "signature" => $signature,
            "requestBody" => $requestBody,
        ]);
    }

}
