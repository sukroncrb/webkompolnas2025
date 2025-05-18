<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;

final class BukuController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'buku/index',
            data: [
                'title' => 'Daftar Buku',
            ]
        );
    }

    public function add()
    {
        return $this->view(
            model: 'admin',
            template: 'buku/add',
            data: [
                'title' => 'Buat Buku',
                'penulis' => DB::terhubung()->query("SELECT users.id, users.nama FROM users, grup WHERE users.grupid = grup.id AND grup.nama = ?",['Penulis'])->hasil()
            ]
        );
    }

    public function edit($params)
    {
        $id =  $params['id'];
        $exist = DB::terhubung()->query("SELECT id FROM buku WHERE id = ? ",[$id]);
        if($exist->hitung() == 0){
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD')."/buku");
        }

        $terbit = DB::terhubung()->query("SELECT terbit FROM buku WHERE id = ? ",[$id])->teks();
        
        $tglterbit = explode(" ",$terbit)[0];
        
        return $this->view(
            model: 'admin',
            template: 'buku/edit',
            data: [
                'title' => 'Edit buku',
                'id' => $id,
                'judul' => DB::terhubung()->query("SELECT judul FROM buku WHERE id = ? ",[$id])->teks(),
                'keterangan' => DB::terhubung()->query("SELECT keterangan FROM buku WHERE id = ? ",[$id])->teks(),
                'penulis' => DB::terhubung()->query("SELECT penulis FROM buku WHERE id = ? ",[$id])->teks(),
                'isbn' => DB::terhubung()->query("SELECT isbn FROM buku WHERE id = ? ",[$id])->teks(),
                'terbit' => $tglterbit,
                'penerbit' => DB::terhubung()->query("SELECT penerbit FROM buku WHERE id = ? ",[$id])->teks(),
                'kategori' => DB::terhubung()->query("SELECT kategori FROM buku WHERE id = ? ",[$id])->teks(),
                'cover' => DB::terhubung()->query("SELECT cover FROM buku WHERE id = ? ",[$id])->teks(),
                'link' => DB::terhubung()->query("SELECT link FROM buku WHERE id = ? ",[$id])->teks(),
            ]
        );
    }

    public function read($params)
    {
        return $this->view(
            model: 'admin',
            template: 'buku/read',
            data: [
                'title' => 'Detail buku',
            ]
        );
    }

}
