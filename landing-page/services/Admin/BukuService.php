<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;
use App\Service\Upload;

final class BukuService extends Service
{

    use Upload;

    public function load($param)
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->authentication($method);
        return match ($method) {
            'get' => $this->get($param),
            default => $this->post()
        };
    }

    protected function get($param) {
        if(count($param) > 0){
            return match($param[0]){
                'tabel' => $this->tabel(),
                default => $this->tabel()
            };
        }else{
            return $this->web();
        }
    }

    protected function web() {
        $data = DB::terhubung()->query("
            SELECT
                id,
                judul,
                penulis,
                cover
            FROM
                buku
            ORDER BY
                dibuat 
            DESC
        ")->hasil();
        $this->success($data);
    }

    protected function tabel() {
        $data = DB::terhubung()->query("SELECT id, judul, isbn, keterangan, cover, penulis FROM buku ORDER BY dibuat DESC")->hasil();
        return $this->success($data);
    }

    protected function post() {
        
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            'UPLOAD' => $this->upload(),
            'PATCH' => $this->update(),
            'DELETE' => $this->delete(),
            'SEARCH' => $this->cari(),
            default => $this->tambah()
        };

    }

    protected function tambah() {
        $judul = Input::get('judul');
        $keterangan = Input::get('keterangan');
        $penulis = Input::get('penulis');
        $isbn = Input::get('isbn');
        $terbit = Input::get('terbit');
        $penerbit = Input::get('penerbit');
        $kategori = Input::get('kategori');
        $cover = Input::get('cover');
        $link = Input::get('link');

        $already = DB::terhubung()->query("SELECT id FROM buku WHERE judul = ? AND penulis = ? ", [$judul,$penulis]);
        if($already->hitung()){
            return $this->badrequest("Buku ini sudah ada");
        }

        $input = DB::terhubung()->input('buku', [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'penulis' => $penulis,
            'isbn' => $isbn,
            'terbit' => $terbit,
            'penerbit' => $penerbit,
            'kategori' => $kategori,
            'cover' => $cover,
            'link' => $link
        ]);
        if($input){
            return $this->success();
        }else{
            return $this->badrequest("Gagal menginput data");
        }
    }

    protected function update() {
        $id = Input::get('id');
        $judul = Input::get('judul');
        $keterangan = Input::get('keterangan');
        $penulis = Input::get('penulis');
        $isbn = Input::get('isbn');
        $terbit = Input::get('terbit');
        $penerbit = Input::get('penerbit');
        $kategori = Input::get('kategori');
        $cover = Input::get('cover');
        $link = Input::get('link');

        $already = DB::terhubung()->query("SELECT id FROM buku WHERE judul = ? AND penulis = ? AND id != ? ", [$judul,$penulis,$id]);
        if($already->hitung()){
            return $this->badrequest("Buku ini sudah ada");
        }

        $perbarui = DB::terhubung()->perbarui('buku', $id, [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'penulis' => $penulis,
            'isbn' => $isbn,
            'terbit' => $terbit,
            'penerbit' => $penerbit,
            'kategori' => $kategori,
            'cover' => $cover,
            'link' => $link
        ]);
        if($perbarui){
            return $this->success();
        }else{
            return $this->badrequest("Gagal memperbarui data");
        }
    }

    protected function delete() {
        $id = Input::get('id');
        $judul = DB::terhubung()->query("SELECT judul FROM buku WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("buku", [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            $this->success([
                'judul' => $judul,
                'id' => $id
            ]);
        }else{
            $this->badrequest("Gagal menghapus ".$judul);
        }
    }

    protected function cari() {
        $f = Input::get('opsi');
        $keyword = Input::get('keyword');
        $data = DB::terhubung()->query("
        SELECT 
            id, 
            judul, 
            isbn, 
            keterangan, 
            cover, 
            penulis
        FROM 
            buku 
        WHERE 
            {$f} LIKE ?
        ORDER BY dibuat 
        DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }
    

}