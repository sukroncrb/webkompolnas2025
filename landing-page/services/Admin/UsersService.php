<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;

final class UsersService extends Service
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
        $data = DB::terhubung()->query("SELECT users.id as iduser, users.nama as namauser, users.email, users.nohp, users.photo, grup.nama as namagrup FROM users, grup WHERE users.grupid = grup.id AND users.id != ? ORDER BY users.dibuat DESC", [$this->getID()])->hasil();
        echo $this->success($data);
    }

    protected function post() {
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            'PASS' => $this->updatePassword(),
            'INFO' => $this->updateInfo(),
            'PATCH' => $this->update(),
            'DELETE' => $this->delete(),
            'SEARCH' => $this->cari(),
            'UPLOAD' => $this->setupload(),
            default => $this->tambah()
        };

    }

    protected function tambah() {
        $data = $_POST;
        $salt = Generate::salt();

        $psw = Input::get('psw');
        if($psw != ""){
            $password = Generate::password($psw, $salt);
        }else{
            $psw = Config::fromEnv('DEFAULT_PASSWORD_USER');
            $password = Generate::password($psw, $salt);
        }

        $nama = Input::get('nama');
        $email = Input::get('email');
        $grupid = Input::get('grupid');

        $emailexist = DB::terhubung()->query("SELECT email FROM users WHERE email = '".$email."' ")->teks();

        if($emailexist == $email){
            $this->badrequest("Email ".$email." sudah digunakan");
        }else{
            $input = DB::terhubung()->input('users',[
                'nama' => $nama,
                'email' => $email,
                'grupid' => $grupid,
                'psw' => $password,
                'salt' => $salt,
                'photo' => 'assets/storage/default/pp.jpg'
            ]);
            if($input){
                $this->success($data);
            }else{
                $this->badrequest("Gagal menginput data");
            }
        }

    }

    protected function setupload() {

        $nama = Input::file('file','name');
        $temp = Input::file('file','tmp_name');
        $ukuran = Input::file('file','size');
        $folder = Input::get('folder');

        $dir = __DIR__."/../../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$this->getDir()."/".$folder."/";
        if(!file_exists($dir)){
            mkdir($dir,0777,true);
        }

        $namabaru = rand(0000,9999).str_replace(" ","_",$nama);
        $file = $dir . $namabaru ;
        $filetipe = strtolower(pathinfo($file,PATHINFO_EXTENSION));

        if ($ukuran > Config::fromEnv('UKURAN_MAX_IMAGE_UPLOAD')) {
            return $this->badrequest("Maaf ukuran terlalu besar, pastikan tidak melebihi 2MB.");
        }

        if(!in_array($filetipe, explode(",",Config::fromEnv('FILE_TYPE_IMAGE_ALLOW')))) {
            return $this->badrequest("Maaf, hanya file ".Config::fromEnv('FILE_TYPE_IMAGE_ALLOW')." yang diijinkan.");
        }

        $linkfile = 'assets/storage/'.$this->getDir().'/'.$folder.'/'.$namabaru;

        if (file_exists($file)) {
            return $this->badrequest("Maaf, file ini sudah ada.");
        }

        if (move_uploaded_file($temp, $file)) {
            DB::terhubung()->perbarui("users", $this->getID(), [
                'photo' => $linkfile
            ]);
            return $this->success($linkfile);
        } else {
            return $this->badrequest("Upload gagal");
        }

    }

    protected function update() {
        $nama = Input::get('nama');
        $email = Input::get('email');
        $nohp = Input::get('nohp');
        $psw = Input::get('psw');
        $id = Input::get('id');
        $salt = DB::terhubung()->query("SELECT salt FROM users WHERE id = '".$id."' ")->teks();
        $password = DB::terhubung()->query("SELECT psw FROM users WHERE id = '".$id."' ")->teks();
        $photo =  DB::terhubung()->query("SELECT photo FROM users WHERE id = '".$id."' ")->teks();
        $grupid =  Input::get('grupid');

        if($psw != ""){
            $salt = Generate::salt();
            $password = Generate::password($psw, $salt);
        }

        if(DB::terhubung()->query("SELECT email FROM users WHERE email = ? AND id != ? ", [$email, $id])->hitung()){
            return $this->badrequest("Email <strong>".$email."</strong> sudah digunakan");
        }

        $perbarui = DB::terhubung()->perbarui("users", $id, [
            'nama' => $nama,
            'email' => $email,
            'nohp' => $nohp,
            'grupid' => $grupid,
            'salt' => $salt,
            'psw' => $password,
            'photo' => $photo
        ]);

        if(!$perbarui){
            return $this->badrequest("Gagal memperbarui user");
        }

        return $this->success([
            'info' => 'User telah diperbarui',
            'nama' => $nama
        ]);
    }

    protected function updatePassword() {
        $salt = $this->getSalt();
        $password = $this->getPassword();
        $pswbaru = Input::get('pswbaru');
        $konfirmasipsw = Input::get('konfirmasipsw');
        $psw = Input::get('psw');

        if($pswbaru !== $konfirmasipsw){
            return $this->badrequest("<strong>Konfirmasi Password</strong> tidak sesuai");
        }

        if(Generate::password($psw, $salt) !== $password){
            return $this->badrequest("<strong>Password</strong> saat ini salah");
        }

        $newsalt = Generate::salt();

        $perbarui = DB::terhubung()->perbarui("users", $this->getID(), [
            'salt' => $newsalt,
            'psw' => Generate::password($pswbaru,$newsalt)
        ]);

        if(!$perbarui){
            return $this->badrequest("Gagal memperbarui password");
        }

        return $this->success([
            'info' => 'password user telah diperbarui'
        ]);
    }

    protected function updateInfo() {
        $nama = Input::get('nama');
        $email = Input::get('email');
        $nohp = Input::get('nohp');

        if(DB::terhubung()->query("SELECT email FROM users WHERE email = ? AND id != ? ", [$email, $this->getID()])->hitung()){
            return $this->badrequest("Email <strong>".$email."</strong> sudah digunakan");
        }

        $perbarui = DB::terhubung()->perbarui("users", $this->getID(), [
            'nama' => $nama,
            'email' => $email,
            'nohp' => $nohp
        ]);

        if(!$perbarui){
            return $this->badrequest("Gagal memperbarui user");
        }

        if($email != $this->getEmail()){
            Cookies::hapus('_sc');
            return $this->success([
                'info' => 'redirect',
                'url' => Config::Baseurl().Config::fromEnv('PREFIX_DASHBOARD'),
            ]);
        }

        return $this->success([
            'info' => 'Informasi user telah diperbarui',
            'nama' => $nama
        ]);
    }

    protected function delete() {
        $id = Input::get('id');
        $email = DB::terhubung()->query("SELECT email FROM users WHERE id = '".$id."' ")->teks();
        $hapus = DB::terhubung()->hapus("users", [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            $this->success([
                'email' => $email
            ]);
        }else{
            $this->badrequest("Gagal menghapus ".$email);
        }
    }

    protected function cari() {
        $f = Input::get('opsi');
        $keyword = Input::get('keyword');
        $data = DB::terhubung()->query("SELECT users.id as iduser, users.nama as namauser, users.email, users.nohp, users.photo, grup.nama as namagrup FROM users, grup WHERE users.grupid = grup.id AND {$f} LIKE ? AND users.id != '".$this->getID()."' ORDER BY users.dibuat DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }

}