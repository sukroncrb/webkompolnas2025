<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;

final class BeritaController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'berita/index',
            data: [
                'title' => 'Daftar Berita',
            ]
        );
    }

    public function add()
    {
        return $this->view(
            model: 'admin',
            template: 'berita/add',
            data: [
                'title' => 'Buat Berita',
                'penulis' => DB::terhubung()->query("SELECT users.id, users.nama FROM users, grup WHERE users.grupid = grup.id AND grup.nama = ?",['Penulis'])->hasil()
            ]
        );
    }

    public function edit($params)
    {
        $id =  $params['id'];
        $exist = DB::terhubung()->query("SELECT id FROM berita WHERE id = ? ",[$id]);
        if($exist->hitung() == 0){
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD')."/berita");
        }

        $idpenulis = DB::terhubung()->query("SELECT penulis FROM berita WHERE id = ? ",[$id])->teks();
        
        return $this->view(
            model: 'admin',
            template: 'berita/edit',
            data: [
                'title' => 'Edit Berita',
                'id' => $id,
                'judul' => DB::terhubung()->query("SELECT judul FROM berita WHERE id = ? ",[$id])->teks(),
                'slug' => DB::terhubung()->query("SELECT slug FROM berita WHERE id = ? ",[$id])->teks(),
                'potongan' => DB::terhubung()->query("SELECT potongan FROM berita WHERE id = ? ",[$id])->teks(),
                'isi' => DB::terhubung()->query("SELECT isi FROM berita WHERE id = ? ",[$id])->teks(),
                'tag' => DB::terhubung()->query("SELECT tag FROM berita WHERE id = ? ",[$id])->teks(),
                'kategori' => DB::terhubung()->query("SELECT kategori FROM berita WHERE id = ? ",[$id])->teks(),
                'publikasi' => DB::terhubung()->query("SELECT publikasi FROM berita WHERE id = ? ",[$id])->teks(),
                'gambar' => DB::terhubung()->query("SELECT gambar FROM berita WHERE id = ? ",[$id])->teks(),
                'idpenulis' => $idpenulis,
                'namapenulis' => DB::terhubung()->query("SELECT nama FROM users WHERE id = ? ",[$idpenulis])->teks(),
                'penulis' => DB::terhubung()->query("SELECT users.id, users.nama FROM users, grup WHERE users.grupid = grup.id AND grup.nama = ?",['Penulis'])->hasil()
            ]
        );
    }

    public function read($params)
    {
        return $this->view(
            model: 'admin',
            template: 'berita/read',
            data: [
                'title' => 'Detail Berita',
            ]
        );
    }

}
