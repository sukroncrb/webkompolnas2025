<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Config;
use App\Model\Seting;
use App\Service\Service;
final class SetingService extends Service
{

    public function load($param)
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->authentication($method);
        return match ($method) {
            'get' => $this->get($param),
            default => $this->post()
        };
    }

    protected function get($param) {
        //
    }

    protected function post() {
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            'EMAIL_SERVICE' => $this->emailService(),
            'YOUTUBE_SERVICE' => $this->youtubeService(),
            default => $this->update()
        }; 
    }

    protected function update() {
        //
    }

    protected function emailService() {
        $id = Input::get('id');
        $tipe = Input::get('tipe');
        unset($_POST['id']);
        unset($_POST['tipe']);
        unset($_POST['__csrf']);
        $kode = Generate::secretCode($_POST, Config::fromEnv('SECRET_KEY'));
        $perbarui = DB::terhubung()->perbarui('seting', $id, [
            'kode' => $kode,
            'tipe' => $tipe
        ]);
        if($perbarui){
            $this->success();
        }else{
            $this->badrequest('Gagal memperbarui setingan');
        }
    }

    protected function youtubeService() {
        $id = Input::get('id');
        $tipe = Input::get('tipe');
        unset($_POST['id']);
        unset($_POST['tipe']);
        unset($_POST['__csrf']);
        $kode = Generate::secretCode($_POST, Config::fromEnv('SECRET_KEY'));
        $perbarui = DB::terhubung()->perbarui('seting', $id, [
            'kode' => $kode,
            'tipe' => $tipe
        ]);
        if($perbarui){
            $this->success();
        }else{
            $this->badrequest('Gagal memperbarui setingan');
        }
    }

    

}