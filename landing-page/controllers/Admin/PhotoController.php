<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;

final class PhotoController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'photo/index',
            data: [
                'title' => 'Semua photo',
            ]
        );
    }

    public function album()
    {
        return $this->view(
            model: 'admin',
            template: 'photo/album',
            data: [
                'title' => 'Buat Album',
            ]
        );
    }

    public function add($params)
    {
        if(isset($params[1])){
            if(isset($params[2])){
                return $this->view(
                    model: 'admin',
                    template: 'photo/editalbum',
                    data: [
                        'title' => 'Edit Album',
                        'id' => $params[1],
                        'judul' => DB::terhubung()->query("SELECT judul FROM album WHERE id = ? ", [$params[1]])->teks(),
                        'keterangan' => DB::terhubung()->query("SELECT keterangan FROM album WHERE id = ? ", [$params[1]])->teks(),
                        'kategori' => DB::terhubung()->query("SELECT kategori FROM album WHERE id = ? ", [$params[1]])->teks(),
                        'cover' => DB::terhubung()->query("SELECT cover FROM album WHERE id = ? ", [$params[1]])->teks(),
                    ]
                );
            }else{
                return $this->view(
                    model: 'admin',
                    template: 'photo/add',
                    data: [
                        'title' => 'Tambah photo',
                        'album' => $params[1],
                        'judulalbum' => DB::terhubung()->query("SELECT judul FROM album WHERE id = ? ", [$params[1]])->teks()
                    ]
                );
            }
        }else{
            Lanjut::ke(Config::fromEnv("PREFIX_DASHBOARD")."/photo/album");
        }
    }

    public function edit($params)
    {
        return $this->view(
            model: 'admin',
            template: 'photo/edit',
            data: [
                'title' => 'Edit photo',
            ]
        );
    }


}
