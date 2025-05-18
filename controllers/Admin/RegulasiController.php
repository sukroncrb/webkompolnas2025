<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Mysql\DB;

final class RegulasiController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'regulasi/index',
            data: [
                'title' => 'Regulasi',
            ]
        );
    }

    public function add()
    {
        return $this->view(
            model: 'admin',
            template: 'regulasi/add',
            data: [
                'title' => 'Tambah Regulasi',
            ]
        );
    }

    public function edit($params)
    {
        $id = $params['id'];
        return $this->view(
            model: 'admin',
            template: 'regulasi/edit',
            data: [
                'title' => 'Edit Regulasi',
                'id' => $id,
                'judul' => DB::terhubung()->query("SELECT judul FROM regulasi WHERE id = ? ", [$id])->teks(),
                'bentuk' => DB::terhubung()->query("SELECT bentuk FROM regulasi WHERE id = ? ", [$id])->teks(),
                'pemerkarsa' => DB::terhubung()->query("SELECT pemerkarsa FROM regulasi WHERE id = ? ", [$id])->teks(),
                'nomor' => DB::terhubung()->query("SELECT nomor FROM regulasi WHERE id = ? ", [$id])->teks(),
                'tentang' => DB::terhubung()->query("SELECT tentang FROM regulasi WHERE id = ? ", [$id])->teks(),
                'pengundang' => DB::terhubung()->query("SELECT pengundang FROM regulasi WHERE id = ? ", [$id])->teks(),
                'tempatpenetapan' => DB::terhubung()->query("SELECT tempatpenetapan FROM regulasi WHERE id = ? ", [$id])->teks(),
                'tanggalpenetapan' => explode(" ",DB::terhubung()->query("SELECT tanggalpenetapan FROM regulasi WHERE id = ? ", [$id])->teks())[0],
                'penandatangan' => DB::terhubung()->query("SELECT penandatangan FROM regulasi WHERE id = ? ", [$id])->teks(),
                'status' => DB::terhubung()->query("SELECT status FROM regulasi WHERE id = ? ", [$id])->teks(),
                'dokumen' => DB::terhubung()->query("SELECT dokumen FROM regulasi WHERE id = ? ", [$id])->teks(),
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
