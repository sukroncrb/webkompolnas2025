<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Info;
use Abiesoft\Resource\Utilities\Input;
use Abiesoft\Resource\Utilities\Reader;
use App\Service\Service;

final class AuthService extends Service
{

    protected function cariuser($email){
        if ($email) {
            $data = DB::terhubung()->tampilkan('users', ['email', '=', $email]);
            if ($data->hitung()) {
                return $data->awal();
            }
        }
        return false;
    }

    public function login() {

        $this->authentication('post');

        /*

        
            Cek Csrf
        */
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $email = Input::get('email');
        $psw = Input::get('psw');
        
        /*

        
            Cek User
        */
        $user = $this->cariuser($email);
        if(!$user){
            return $this->badrequest("<strong>Email</strong> tidak terdaftar. Silahkan coba lagi.");
        }

        /*


            Cek Password
        */
        $salt = $user->salt;
        if(Generate::password($psw, $salt) != $user->psw){
            return $this->badrequest("<strong>Password</strong> Salah, Silahkan coba lagi.");
        }

        $result = [
            'info' => 'redirect',
            'url' => Config::Baseurl().Config::fromEnv('PREFIX_DASHBOARD')
        ];

        $kode = Generate::angka();
        $sesi = [
            'email' => $email,
            'kode' => $kode
        ];

        $sc = Generate::secretCode($sesi, Config::fromEnv('SECRET_KEY'));
        Cookies::simpan('_sc', $sc);

        $inputsesi = DB::terhubung()->input('sesi',[
            'email' => $email,
            'kode' => $kode,
            'device' => Info::device()['device'],
            'os' => Info::device()['os'],
            'ip' => Info::device()['ip']
        ]);

        if(!$inputsesi){
            Cookies::hapus('_sc');
            return $this->badrequest("<strong>Login gagal!</strong> Silahkan coba lagi.");
        }
        
        return $this->success($result);

    }


    public function logout() {
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'),Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $kode = $sc['kode'];
            $sesi = DB::terhubung()->query("SELECT id FROM sesi WHERE email = ? AND kode = ? ", [$email,$kode]);
            if($sesi){
                DB::terhubung()->hapus('sesi', [
                    'id', '=', $sesi->teks()
                ]);
                Cookies::hapus('_sc');
                session_destroy();
                Lanjut::ke();
            }else{
                Cookies::hapus('_sc');
                session_destroy();
                Lanjut::ke();
            }
        }else{
            Cookies::hapus('_sc');
            session_destroy();
            Lanjut::ke();
        }
    }

}