<?php 

namespace App\Service;

use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Input;

trait Upload
{
    public function upload($elementname = "file", $output = "json") {
        $nama = Input::file($elementname,'name');
        $temp = Input::file($elementname,'tmp_name');
        $ukuran = Input::file($elementname,'size');
        $error = Input::file($elementname,'error');
        $folder = Input::get('folder');
        $jenis = Input::get('jenis');

        if($error !=  1){

            $dir = __DIR__."/../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$this->getDir()."/".$folder."/";
            if(!file_exists($dir)){
                mkdir($dir,0777,true);
            }

            
            $namabaru = rand(0000,9999).str_replace(" ","_",$nama);
            $file = $dir . $namabaru ;
            $filetipe = strtolower(pathinfo($file,PATHINFO_EXTENSION));


            if($jenis == "DOKUMEN"){
                if ($ukuran > Config::fromEnv('UKURAN_MAX_DOKUMEN_UPLOAD')) {
                    if($output == 'string'){
                        return "Maaf ukuran terlalu besar, pastikan tidak melebihi 5MB.";
                    }else{
                        return $this->badrequest("Maaf ukuran terlalu besar, pastikan tidak melebihi 5MB.");
                    }
                }
        
                if(!in_array($filetipe, explode(",",Config::fromEnv('FILE_TYPE_DOKUMEN_ALLOW')))) {
                    if($output == 'string'){
                        return "Maaf, hanya file ".Config::fromEnv('FILE_TYPE_DOKUMEN_ALLOW')." yang diijinkan.";
                    }else{
                        return $this->badrequest("Maaf, hanya file ".Config::fromEnv('FILE_TYPE_DOKUMEN_ALLOW')." yang diijinkan.");
                    }
                }
            }else if($jenis == "MEDIA"){
                if ($ukuran > Config::fromEnv('UKURAN_MAX_MEDIA_UPLOAD')) {
                    if($output == 'string'){
                        return "Maaf ukuran terlalu besar, pastikan tidak melebihi 8MB.";
                    }else{
                        return $this->badrequest("Maaf ukuran terlalu besar, pastikan tidak melebihi 8MB.");
                    }
                }
        
                if(!in_array($filetipe, explode(",",Config::fromEnv('FILE_TYPE_MEDIA_ALLOW')))) {
                    if($output == 'string'){
                        return "Maaf, hanya file ".Config::fromEnv('FILE_TYPE_MEDIA_ALLOW')." yang diijinkan.";
                    }else{
                        return $this->badrequest("Maaf, hanya file ".Config::fromEnv('FILE_TYPE_MEDIA_ALLOW')." yang diijinkan.");
                    }
                }
            }else{
                if ($ukuran > Config::fromEnv('UKURAN_MAX_IMAGE_UPLOAD')) {
                    if($output == 'string'){
                        return "Maaf ukuran terlalu besar, pastikan tidak melebihi 2MB.";
                    }else{
                        return $this->badrequest("Maaf ukuran terlalu besar, pastikan tidak melebihi 2MB.");
                    }
                }
        
                if(!in_array($filetipe, explode(",",Config::fromEnv('FILE_TYPE_IMAGE_ALLOW')))) {
                    if($output == 'string'){
                        return "Maaf, hanya file ".Config::fromEnv('FILE_TYPE_IMAGE_ALLOW')." yang diijinkan.";
                    }else{
                        return $this->badrequest("Maaf, hanya file ".Config::fromEnv('FILE_TYPE_IMAGE_ALLOW')." yang diijinkan.");
                    }
                }
            }


            $linkfile = 'assets/storage/'.$this->getDir().'/'.$folder.'/'.$namabaru;

            if (file_exists($file)) {
                if($output == 'string'){
                    return "Maaf, file ini sudah ada.";
                }else{
                    return $this->badrequest("Maaf, file ini sudah ada.");
                }
            }

            if($output == "string"){
                if (move_uploaded_file($temp, $file)) {
                    return $linkfile;
                } else {
                    return "Gagal mengupload data ";
                }
            }else{
                if (move_uploaded_file($temp, $file)) {
                    return $this->success($linkfile);
                } else {
                    return $this->badrequest("Upload gagal");
                }
            }

        }else{

            return $this->badrequest("Error karena file tidak dikenali. Pastikan ukuran tidak melebihi 2MB.");

        }
        
    }


    public function publicupload($inputname) {
        $nama = Input::file($inputname,'name');
        $temp = Input::file($inputname,'tmp_name');
        $ukuran = Input::file($inputname,'size');
        $dir = __DIR__."/../".Config::fromEnv('PUBLIC_FOLDER')."/assets/web/upload/dokumen/";
        if(!file_exists($dir)){
            mkdir($dir,0777,true);
        }
        $namabaru = rand(0000,9999).str_replace(" ","_",$nama);
        $file = $dir . $namabaru ;
        $filetipe = strtolower(pathinfo($file,PATHINFO_EXTENSION));

        if (file_exists($file)) {
            return $this->badrequest("Maaf, sudah ada.");
        }

        if ($ukuran > 500000) {
            return $this->badrequest("Maaf ukuran terlalu besar, pastikan tidak melebihi 5MB.");
        }

        if($filetipe != "pdf") {
            return $this->badrequest("Maaf, hanya file pdf yang diijinkan.");
        }

        $linkfile = 'assets/web/upload/dokumen/'.$namabaru;
        
        if(move_uploaded_file($temp, $file)){
            $_POST[$inputname] = $linkfile;
        } else {
            return $this->badrequest("Gagal");
        }
    }
}