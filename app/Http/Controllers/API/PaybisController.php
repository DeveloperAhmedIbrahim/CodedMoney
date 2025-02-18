<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\RsaSignatureService;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaybisController extends Controller
{
    protected $rsaSignature;
    protected $privateKey;

    public function __construct()
    {
        // $this->rsaSignature = $rsaSignature;
        $this->privateKey = env('PAYBIS_PRIVATE_KEY');
    }

    // public function sign()
    // {
    //     // Example request body.
    //     $requestBody = json_encode([
    //         "partnerUserId" => "1bc166bd-1808-4009-8454-aceb47ba8753",
    //         "cryptoWalletAddress" => null,
    //         "email" => "doe.john@paybis.com",
    //         "applicantSumsubToken" => "token_hash",
    //         "locale" => "en"
    //     ]);

    //     $signature = $this->rsaSignature->signRequestBody($requestBody);

    //     return response()->json([
    //         "signature" => $signature,
    //         "requestBody" => $requestBody,
    //     ]);
    // }

    public function currpairsBuyCrypto()
    {
        $data = array();
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://widget-api.sandbox.paybis.com/v2/currency/pairs/buy-crypto",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "Authorization: {$this->privateKey}",
            "accept: application/json"
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
            $message = "Buy crypto currency pairs get successfully.";
            $data = json_decode($response, true);
        }

        return response()->json([
            "status" => $status,
            "data" => $data,
            "message" => $message,
        ]);
    }

    public function currpairsSellCrypto()
    {
        $data = array();
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://widget-api.sandbox.paybis.com/v2/currency/pairs/sell-crypto",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "Authorization: {$this->privateKey}",
            "accept: application/json"
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
            $message = "Sell crypto currency pairs get successfully.";
            $data = json_decode($response, true);
        }

        return response()->json([
            "status" => $status,
            "data" => $data,
            "message" => $message,
        ]);
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
            $status = true;
            $message = "Widget request get successfully.";
            $data = json_decode($response, true);
        }

        return response()->json([
            "status" => $status,
            "data" => $data,
            "message" => $message,
        ]);
    }

}
