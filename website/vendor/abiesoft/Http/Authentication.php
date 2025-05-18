<?php

namespace Abiesoft\Resource\Http;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Utilities\Reader;

class Authentication {

    protected function infoData($email){
        if ($email) {
            $data = DB::terhubung()->tampilkan('users', ['email', '=', $email]);
            if ($data->hitung()) {
                return $data->awal();
            }
        }
        return false;
    }

    protected function isLogin():bool {
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $kode = $sc['kode'];
            $sesi = DB::terhubung()->query("SELECT id FROM sesi WHERE email = ? AND kode = ? ", [$email,$kode]);
            if($sesi->hitung()){
                $fdr = $this->getDir();
                $ustorage = __DIR__."/../../../".Config::fromEnv('PUBLIC_FOLDER')."/assets/storage/".$fdr;
                if(!file_exists($ustorage)){
                    mkdir($ustorage,0777,true);
                }
                return true;
            }else{
                Cookies::hapus('_sc');
                return false;
            }
        }else{
            Cookies::hapus('_sc');
            return false;
        }
    }

    protected function getID(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->id;
        }
    }

    protected function getNama(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->nama;
        }
    }

    protected function getEmail(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            return $email;
        }
    }

    protected function getNoHp(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->nohp;
        }
    }

    protected function getPhoto(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->photo;
        }
    }

    protected function getSalt(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->salt;
        }
    }

    protected function getPassword(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->psw;
        }
    }

    protected function getGrupId(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->grupid;
        }
    }

    protected function getDir(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            return $user->dir;
        }
    }

    protected function getNamaGrup(){
        if(Cookies::ada('_sc')){
            $sc = Reader::secretCode(Cookies::lihat('_sc'), Config::fromEnv('SECRET_KEY'));
            $email = $sc['email'];
            $user = $this->infoData($email);
            $namagrup = DB::terhubung()->query("SELECT nama FROM grup WHERE id = ? ", [$user->grupid])->teks();
            return $namagrup;
        }
    }

}