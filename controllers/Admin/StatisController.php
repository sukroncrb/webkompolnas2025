<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Mysql\DB;

final class StatisController extends Controller
{

    public function index($params)
    {
        
        return match($params[0]) {
            'editor' => $this->editorIndex($params),
            default => $this->defaultIndex($params)
        };
        
    }

    public function editorIndex($params)
    {
        unset($params[0]);
        $params = array_values($params);
        $params = array_filter($params, function ($value) {
            return $value !== null && $value !== '';
        });

        return match($params[0]) {
            'home-page' => $this->homepage($params),
            default => $this->homepage($params)
        };
    }

    public function defaultIndex($params)
    {
        Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD'));
    }

    public function homepage($params)
    {
        unset($params[0]);
        $params = array_values($params);
        $params = array_filter($params, function ($value) {
            return $value !== null && $value !== '';
        });

        $bannerphotoid = '033af9f8-69a1-4314-a956-c1433fffac2a';
        $quotesid = '4dd58d8d-6e3c-44ee-9f02-c1241fdb0be2';
        $banneryoutubeid = '77227295-5c70-4063-93bf-43b2c7181645';
        
        return $this->view(
            model: 'admin',
            template: 'statis/home-page',
            data: [
                'title' => 'Home Page',
                'bannerphotoid' => $bannerphotoid,
                'bannerphoto' => DB::terhubung()->query("SELECT media FROM statis WHERE id = ? ", [$bannerphotoid])->teks(),
                'quotesid' => $quotesid,
                'quotes' => DB::terhubung()->query("SELECT keterangan FROM statis WHERE id = ? ", [$quotesid])->teks(),
                'shortcut' => DB::terhubung()->query("SELECT id, label, media, link FROM statis WHERE model = ? ", ['shortcut'])->hasil(),
                'banneryoutubeid' => $banneryoutubeid,
                'banneryoutube' => DB::terhubung()->query("SELECT media FROM statis WHERE id = ? ", [$banneryoutubeid])->teks(),
                'linkbanneryoutube' => DB::terhubung()->query("SELECT link FROM statis WHERE id = ? ", [$banneryoutubeid])->teks(),
            ]
        );
    }

    

}
