<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Http\Authentication;
use App\Service\Service;
use App\Service\Upload;
use DateTime;

final class StatisService extends Service
{

    use Upload;

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
        return match($param[0]){
            'listkomisioner' => $this->listKomisioner(),
            default => $this->listShortCut()
        };
    }

    protected function listShortCut() {
        return $this->success(DB::terhubung()->query("SELECT id, label, media, link FROM statis WHERE model = ? ORDER BY dibuat ", ['shortcut'])->hasil());
    }
    
    protected function post() {
        
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            'HOME_PAGE_BANNER_PHOTO' => $this->bannerphoto(),
            'HOME_PAGE_QUOTES' => $this->quotes(),
            'HOME_PAGE_SHORTCUT' => $this->shortcut(),
            'HOME_PAGE_KOMISIONER' => $this->komisioner(),
            'HOME_PAGE_BANNER_YOUTUBE' => $this->banneryoutube(),
            'HAPUS_SHORTCUT' => $this->hapusShortcut(),
            'HAPUS_KOMISIONER' => $this->hapusKomisioner(),
            default => $this->badrequest()
        };

    }

    protected function bannerphoto() {  
        $id = Input::get('id');

        $nama = Input::file("media",'name');
        $temp = Input::file("media",'tmp_name');
        $ukuran = Input::file("media",'size');
        $folder = "homepage";
        $user = new Authentication;
        $dir = __DIR__."/../../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$user->getDir()."/".$folder."/";
        
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
        
        $linkfile = 'assets/storage/'.$user->getDir().'/'.$folder.'/'.$namabaru;

        if (file_exists($file)) {
           return $this->badrequest("Maaf, file ini sudah ada.");
        }

        if (move_uploaded_file($temp, $file)) {
            $perbarui = DB::terhubung()->perbarui('statis', $id, [
                'media' => $linkfile
            ]);

            if($perbarui){
                return $this->success($linkfile);
            }else{
                return $this->badrequest("Gagal mengganti banner");
            }
        } else {
            return $this->badrequest("Gagal mengupload data ");
        }
        
    }
    protected function quotes() {  
        $id = Input::get('id');
        $keterangan = Input::get('keterangan');
        $perbarui = DB::terhubung()->perbarui('statis', $id, [
            'keterangan' => $keterangan
        ]);
        if($perbarui){
            return $this->success($keterangan);
        }else{
            return $this->badrequest("Gagal mengganti quotes");
        }
    }

    protected function shortcut() {
        if(Input::get('id') != ""){
            return $this->replaceShortcut();
        }else{
            return $this->addShortcut();
        }
    }

    protected function addShortcut(){
        $label = Input::get('label');
        $media = Input::get('media');
        $link = Input::get('link');
        $input = DB::terhubung()->input('statis', [
            'label' => $label,
            'media' => html_entity_decode($media),
            'link' => $link,
            'model' => 'shortcut'
        ]);
        if($input){
            return $this->success();
        }else{
            return $this->badrequest("Gagal menambahkan shortcut");
        }
    }

    protected function replaceShortcut(){
        $id = Input::get('id');
        $label = Input::get('label');
        $media = Input::get('media');
        $link = Input::get('link');
        $perbarui = DB::terhubung()->perbarui('statis', $id,[
            'label' => $label,
            'media' => html_entity_decode($media),
            'link' => $link,
            'model' => 'shortcut'
        ]);
        if($perbarui){
            return $this->success("perbarui");
        }else{
            return $this->badrequest("Gagal memperbarui shortcut");
        }
    }

    protected function banneryoutube() {  
        $id = Input::get('id');
        $link = Input::get('link');

        $nama = Input::file("media",'name');
        $temp = Input::file("media",'tmp_name');
        $ukuran = Input::file("media",'size');
        $folder = "homepage";
        $user = new Authentication;
        $dir = __DIR__."/../../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$user->getDir()."/".$folder."/";
        
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
        
        $linkfile = 'assets/storage/'.$user->getDir().'/'.$folder.'/'.$namabaru;

        if (file_exists($file)) {
           return $this->badrequest("Maaf, file ini sudah ada.");
        }

        if (move_uploaded_file($temp, $file)) {
            $perbarui = DB::terhubung()->perbarui('statis', $id, [
                'media' => $linkfile,
                'link' => $link
            ]);

            if($perbarui){
                return $this->success($linkfile);
            }else{
                return $this->badrequest("Gagal mengganti banner");
            }
        } else {
            return $this->badrequest("Gagal mengupload data ");
        }
        
    }

    protected function hapusShortcut() {  
        $id = Input::get('id');
        $hapus = DB::terhubung()->hapus('statis', [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            $this->success();
        }else{
            $this->badrequest("Gagal menghapus data");
        }
    }



    // Komisioner
    
    protected function listKomisioner() {
        $data = DB::terhubung()->query("SELECT id, nama, jabatan, periode, keterangan, photo FROM komisioner ORDER BY dibuat")->hasil();
        return $this->success($data);
    }

    protected function komisioner() {
        if(Input::get('id') != ""){
            return $this->replaceKomisioner();
        }else{
            return $this->addKomisioner();
        }
    }

    protected function addKomisioner(){
        if(Input::file('photo','name') != ""){
            return $this->addWithPhotoKomisioner();
        }else{
            return $this->addWithoutPhotoKomisioner();
        }
    }

    protected function addWithPhotoKomisioner(){
        $nama = Input::file("photo",'name');
        $temp = Input::file("photo",'tmp_name');
        $ukuran = Input::file("photo",'size');
        $folder = "komisioner";
        $user = new Authentication;
        $dir = __DIR__."/../../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$user->getDir()."/".$folder."/";
        
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
        
        $linkfile = 'assets/storage/'.$user->getDir().'/'.$folder.'/'.$namabaru;

        if (file_exists($file)) {
           return $this->badrequest("Maaf, file ini sudah ada.");
        }

        if (move_uploaded_file($temp, $file)) {
            return $this->addWithoutPhotoKomisioner($linkfile);
        } else {
            return $this->badrequest("Gagal mengupload data ");
        }
    }

    protected function addWithoutPhotoKomisioner($photo = ""){
        $nama = Input::get('nama');
        $jabatan = Input::get('jabatan');
        $periode = Input::get('periode');
        $keterangan = Input::get('keterangan');
        if($photo != ""){
            $photo = $photo;
        }else{
            $photo = "assets/storage/default/pp.jpg";
        }
        
        $input = DB::terhubung()->input('komisioner', [
            'nama' => $nama,
            'jabatan' => $jabatan,
            'periode' => $periode,
            'keterangan' => $keterangan,
            'photo' => $photo
        ]);
        if($input){
            return $this->success();
        }else{
            return $this->badrequest("Gagal menambahkan Komisioner");
        }
    }

    protected function replaceKomisioner(){
        if(Input::file('photo','name') != ""){
            return $this->replaceWithPhotoKomisioner();
        }else{
            return $this->replaceWithoutPhotoKomisioner();
        }
    }

    protected function replaceWithPhotoKomisioner(){
        $nama = Input::file("photo",'name');
        $temp = Input::file("photo",'tmp_name');
        $ukuran = Input::file("photo",'size');
        $folder = "komisioner";
        $user = new Authentication;
        $dir = __DIR__."/../../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$user->getDir()."/".$folder."/";
        
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
        
        $linkfile = 'assets/storage/'.$user->getDir().'/'.$folder.'/'.$namabaru;

        if (file_exists($file)) {
           return $this->badrequest("Maaf, file ini sudah ada.");
        }

        if (move_uploaded_file($temp, $file)) {
            return $this->replaceWithoutPhotoKomisioner($linkfile);
        } else {
            return $this->badrequest("Gagal mengupload data ");
        }
    }

    protected function replaceWithoutPhotoKomisioner($photo = ""){
        $id = Input::get('id');
        $nama = Input::get('nama');
        $jabatan = Input::get('jabatan');
        $periode = Input::get('periode');
        $keterangan = Input::get('keterangan');
        if($photo != ""){
            $photo = $photo;
        }else{
            $photo = DB::terhubung()->query("SELECT photo FROM komisioner WHERE id =? ",[$id])->teks();
        }
        $perbarui = DB::terhubung()->perbarui('komisioner', $id, [
            'nama' => $nama,
            'jabatan' => $jabatan,
            'periode' => $periode,
            'keterangan' => $keterangan,
            'photo' => $photo
        ]);
        if($perbarui){
            return $this->success("perbarui");
        }else{
            return $this->badrequest("Gagal memperbarui Komisioner");
        }
    }


    protected function hapusKomisioner() {  
        $id = Input::get('id');
        $hapus = DB::terhubung()->hapus('komisioner', [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            $this->success();
        }else{
            $this->badrequest("Gagal menghapus data");
        }
    }

    // ---- Batas Komisioner


}