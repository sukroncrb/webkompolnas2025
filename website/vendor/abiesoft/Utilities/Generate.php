<?php 

namespace Abiesoft\Resource\Utilities;

use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Utilities\Reader;
use Abiesoft\Resource\Utilities\Config;

class Generate {

    protected static $token = null;

    protected static function acak()
    {
        $karakter = 'AaBbCcDdEeFfGgHhIiJjKkLMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789';
        $batas = strlen($karakter);
        $result = '';
        for ($i = 0; $i < 12; $i++) {
            $result .= $karakter[rand(0, $batas - 1)];
        }
        return $result;
    }

    public static function angka($jumlah = 4): int
    {
        $karakter = '0123456789';
        $batas = strlen($karakter);
        $result = '';
        for ($i = 0; $i < $jumlah; $i++) {
            $result .= $karakter[rand(0, $batas - 1)];
        }
        return $result;
    }

    public static function salt(): string
    {
        $charset = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!~^@#$%^&*";
        $base = strlen($charset);
        $result = '';

        $now = explode(' ', microtime())[1];
        while ($now >= $base) {
            $i = $now % $base;
            $result = $charset[$i] . $result;
            $now /= $base;
        }
        return substr($result, -20);
    }

    public static function secretCode($data, $key) {
        $cipher = "aes-128-cbc";
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);

        if (is_array($data)) {
            $data = json_encode($data);
        }

        $ciphertext = openssl_encrypt($data, $cipher, $key, $options=0, $iv);
        return base64_encode($iv . $ciphertext);
    }  

    public static function createSession(string $email) {
        $kode = Generate::angka(6);
        $data = [
            'email' => $email,
            'sesi' => $kode
        ];
        $key = Config::fromEnv('SECRET_KEY');
        $secretcode = Generate::secretCode($data, $key);
        return $secretcode;
    }

    // public static function csrf(): string
    // {
    //     $result = self::acak();
    //     // Secret Code Form
    //     $sccs = Generate::secretCode(['csrf' => $result], Config::fromEnv('SECRET_KEY'));
    //     Cookies::simpan('_scf',$sccs);
    //     return $result;
    // }

    public static function csrf(): string
    {
        $result = self::acak();
        $referer = $_SERVER['HTTP_REFERER'];
        // Secret Code Form
        if(Cookies::ada('_scf')){
            $kode = Cookies::lihat('_scf');
            $databaru = [];
            $datalama = Reader::secretCode($kode, Config::fromEnv('SECRET_KEY'));
            if (array_key_exists($referer, $datalama)) {
                $datalama[$referer] = $result;
            }else{
                $datalama[$referer] = $result;
            }
            $databaru = $datalama;
            $sccs = Generate::secretCode($databaru, Config::fromEnv('SECRET_KEY'));
            Cookies::simpan('_scf',$sccs);
        }else{
            $data[$referer] = $result;
            $sccs = Generate::secretCode($data, Config::fromEnv('SECRET_KEY'));
            Cookies::simpan('_scf',$sccs);
        }
        return $result;
    }

    public static function password(string $string, string $salt): string
    {
        return hash('sha256', $string . $salt);
    }

}