<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use phpseclib3\Crypt\RSA;

class RsaSignatureService
{
    protected $privateKey;

    public function __construct()
    {
        // Store your private key here.
        $this->privateKey = file_get_contents(Storage::path('private.key'));
    }

    /**
     * Sign a given request body.
     *
     * @param string $requestBody The JSON request body.
     * @return string Base64-encoded RSA signature.
     */
    public function signRequestBody($requestBody): string
    {
        // Hash the request body using SHA-512.
        $requestBodyHash = hash('sha512', $requestBody);

        // Load the private key and configure RSA with PSS signature.
        $rsa = RSA::loadPrivateKey($this->privateKey);
        $rsa = $rsa->withPadding(RSA::SIGNATURE_PSS)
            ->withHash('sha512')
            ->withMGFHash('sha512');

        // Sign the hash and base64-encode the result.
        $signature = base64_encode($rsa->sign($requestBodyHash));

        return $signature;
    }
}
