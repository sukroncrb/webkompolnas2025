<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Mysql\DB;

final class PengumumanController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'pengumuman/index',
            data: [
                'title' => 'Pengumuman',
            ]
        );
    }

    public function add()
    {
        return $this->view(
            model: 'admin',
            template: 'pengumuman/add',
            data: [
                'title' => 'Pengumuman',
            ]
        );
    }

    public function edit($params)
    {
        $id = $params['id'];
        return $this->view(
            model: 'admin',
            template: 'pengumuman/edit',
            data: [
                'title' => 'Pengumuman',
                'id' => $id,
                'judul' => DB::terhubung()->query("SELECT judul FROM pengumuman WHERE id = ? ", [$id])->teks(),
                'keterangan' => DB::terhubung()->query("SELECT keterangan FROM pengumuman WHERE id = ? ", [$id])->teks(),
                'model' => DB::terhubung()->query("SELECT model FROM pengumuman WHERE id = ? ", [$id])->teks(),
                'expire' => explode(" ",DB::terhubung()->query("SELECT expire FROM pengumuman WHERE id = ? ", [$id])->teks())[0],
                'link' => DB::terhubung()->query("SELECT link FROM pengumuman WHERE id = ? ", [$id])->teks(),
                'status' => DB::terhubung()->query("SELECT status FROM pengumuman WHERE id = ? ", [$id])->teks(),
                'banner' => DB::terhubung()->query("SELECT banner FROM pengumuman WHERE id = ? ", [$id])->teks(),
            ]
        );
    }

    public function read($params)
    {
        /*

            Halaman detail data
            method GET
        */
    }

}
