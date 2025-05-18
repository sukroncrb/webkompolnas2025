<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
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
            default => $this->listShortCut()
        };
    }

    protected function listShortCut() {
        return $this->success(DB::terhubung()->query("SELECT id, label, media FROM statis WHERE model = ? ORDER BY dibuat ", ['shortcut'])->hasil());
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
            'HOME_PAGE_BANNER_YOUTUBE' => $this->banneryoutube(),
            'HAPUS_SHORTCUT' => $this->hapusShortcut(),
            default => $this->badrequest()
        };

    }
    protected function bannerphoto() {  
        $id = Input::get('id');
        $media = $this->upload('media', 'string');

        if(strpos($media, "assets/") !== false) {
            $perbarui = DB::terhubung()->perbarui('statis', $id, [
                'media' => $media
            ]);
            if($perbarui){
                return $this->success($media);
            }else{
                return $this->badrequest($media);
            }
        }else{
            return $this->badrequest($media);
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
            return $this->badrequest("Gagal mena");
        }
    }
    protected function banneryoutube() {  
        $id = Input::get('id');
        $media = $this->upload('media', 'string');

        if(strpos($media, "assets/") !== false) {
            $perbarui = DB::terhubung()->perbarui('statis', $id, [
                'media' => $media
            ]);
            if($perbarui){
                return $this->success($media);
            }else{
                return $this->badrequest("Gagal mengganti banner");
            }
        }else{
            return $this->badrequest($media);
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


}