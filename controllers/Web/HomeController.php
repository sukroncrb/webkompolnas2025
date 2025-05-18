<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Info;

final class HomeController extends Controller {

    public function index() {

        if(!Cookies::ada('_px')){
            $data = Info::device();
            $kodeinfo = Generate::secretCode($data, Config::fromEnv('SECRET_KEY'));
            $info = DB::terhubung()->input("pengunjung", [
                'device' => Info::device()['device'],
                'os' => Info::device()['os'],
                'ip' => Info::device()['ip'],
                'info' => $kodeinfo,
            ]);
            if($info){
                Cookies::simpan('_px',$kodeinfo);
            }
        }

        return $this->view(
            model: 'web',
            template: 'home/index',
            data: [
                'title' => 'Official Website Komisi Kepolisian Nasional',
                'banner'=> DB::terhubung()->query("SELECT banner FROM pengumuman WHERE status = 'Terbit' ORDER BY dibuat DESC LIMIT 1")->teks(),
                'linkbanner'=> DB::terhubung()->query("SELECT link FROM pengumuman WHERE status = 'Terbit' ORDER BY dibuat DESC LIMIT 1")->teks(),
                'bannerphoto' => DB::terhubung()->query("SELECT media FROM statis WHERE id = ? ", ['033af9f8-69a1-4314-a956-c1433fffac2a'])->teks(),
                'quotes' => DB::terhubung()->query("SELECT keterangan FROM statis WHERE id = ? ", ['4dd58d8d-6e3c-44ee-9f02-c1241fdb0be2'])->teks(),
                'shortcut' => DB::terhubung()->query("SELECT label, media, link FROM statis WHERE model = ? ORDER BY dibuat ", ['shortcut'])->hasil(),
            ]
        );
    }
    
} 