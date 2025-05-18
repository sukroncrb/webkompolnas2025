<?php

namespace Abiesoft\Resource\Http;

use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Tanggal;
use Abiesoft\Resource\Mysql\DB;
use Latte\Engine;

class Controller extends Authentication{

    public function view(string $model = 'web', string $template = "", array $data = []) {
        
        $finaldata = [];

        $finaldata['sesi'] = [];
        if($this->isLogin()){
            $finaldata['sesi'] = [
                'id' => $this->getID(),
                'nama' => $this->getNama(),
                'email' => $this->getEmail(),
                'nohp' => $this->getNoHp(),
                'photo' => Config::Baseurl().$this->getPhoto(),
                'salt' => $this->getSalt(),
                'grupid' => $this->getGrupId(),
                'namagrup' => $this->getNamaGrup(),
            ];
        }

        $wid = 'd33a4003-a12e-459a-92cc-767fd4bfca5d';
        $finaldata['webinfo'] = [
            'id' => $wid,
            'nama' => DB::terhubung()->query("SELECT nama FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'alamat' => DB::terhubung()->query("SELECT alamat FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'latitude' => DB::terhubung()->query("SELECT latitude FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'longitude' => DB::terhubung()->query("SELECT longitude FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'email' => DB::terhubung()->query("SELECT email FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'notlp' => DB::terhubung()->query("SELECT notlp FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'fax' => DB::terhubung()->query("SELECT fax FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'youtube' => DB::terhubung()->query("SELECT youtube FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'facebook' => DB::terhubung()->query("SELECT facebook FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'instagram' => DB::terhubung()->query("SELECT instagram FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'twitter' => DB::terhubung()->query("SELECT twitter FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
            'tiktok' => DB::terhubung()->query("SELECT tiktok FROM info WHERE id = ? ORDER BY dibuat LIMIT 1", [$wid])->teks(),
        ];

        if($model == "web"){
            $finaldata['apikey'] = Config::fromEnv('PUBLIC_APIKEY');
        }else{
            // $dataapikey = [
            //     'apikey' => Config::fromEnv('APIKEY')
            // ];
            // $finaldata['apikey'] = Generate::secretCode($dataapikey,Config::fromEnv('SECRET_KEY'));

            $finaldata['apikey'] = Config::fromEnv('APIKEY');
        }
        $finaldata['baseurl'] = Config::Baseurl();
        $finaldata['prefix_dashboard'] = Config::fromEnv('PREFIX_DASHBOARD');
        $finaldata['tanggaldanhari'] = Tanggal::fullDanNamaHari(date('Y-m-d'));
        $finaldata['tanggaldanharisimple'] = Tanggal::fullDanNamaHari(date('Y-m-d'),false);
        $finaldata['latlong'] = "";

        $ucapan = "Halo";
        $jamsaatini = date("H");
        if ($jamsaatini >= 3 && $jamsaatini < 9) {
            $ucapan = "Pagi";
        } elseif ($jamsaatini >= 9 && $jamsaatini < 15) {
            $ucapan = "Siang";
        } elseif ($jamsaatini >= 15 && $jamsaatini < 18) {
            $ucapan = "Sore";
        } else {
            $ucapan = "Malam";
        }
        $finaldata['sapa'] = $ucapan;

        foreach($data as $k => $v){
            $finaldata[$k] = $v;
        }

        $dir = __DIR__ . "/../../../";
        $latte = new Engine();
        $latte->setTempDirectory($dir . "temp");
        
        return match($model) {
            'auth' => $latte->render($dir . "templates/auth/".$template.".latte", $finaldata),
            'admin' => $latte->render($dir . "templates/admin/".$template.".latte", $finaldata),
            'admin-error' => $latte->render($dir . "templates/admin/error/".$template.".latte", $finaldata),
            'web' => $latte->render($dir . "templates/web/".$template.".latte", $finaldata),
            default => $this->error()
        };
        
    }

    protected function error() {
        die('404 | Not Found');
    }

}