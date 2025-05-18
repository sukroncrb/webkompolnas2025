<?php 

namespace Abiesoft\Resource\Utilities;

class Reader {

    public static function ip(): string
    {
        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    public static function secretCode($secretcode, $key) {
        $cipher = "aes-128-cbc";
        $ciphertext_dec = base64_decode($secretcode);
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = substr($ciphertext_dec, 0, $ivlen);
        $ciphertext = substr($ciphertext_dec, $ivlen);
        $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv);
        $data = json_decode($original_plaintext, true);
        return (json_last_error() == JSON_ERROR_NONE) ? $data : $original_plaintext;
    }

}