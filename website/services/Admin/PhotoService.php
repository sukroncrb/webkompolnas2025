<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;
use App\Service\Upload;

final class PhotoService extends Service
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
                'album-items' => $this->albumitems($param[1]),
                'tabel' => $this->tabel(),
                default => $this->tabel()
            };
        }else{
            return $this->web();
        }
    }

    protected function albumitems($id) {
        $data = DB::terhubung()->query("SELECT id, gambar, keterangan, dibuat FROM photo WHERE album = ? ORDER BY dibuat DESC", [$id])->hasil();
        return $this->success($data);
    }

    protected function web() {
        // $data = DB::terhubung()->query("
        //     SELECT
        //         id,
        //         judul,
        //         penulis,
        //         cover
        //     FROM
        //         buku
        //     ORDER BY
        //         dibuat 
        //     DESC
        // ")->hasil();
        // $this->success($data);
    }

    protected function tabel() {
        $data = DB::terhubung()->query("SELECT id, cover, judul, keterangan, kategori, dibuat FROM album ORDER BY dibuat DESC")->hasil();
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
            'ALBUM' => $this->album(),
            'EDITALBUM' => $this->editalbum(),
            'DELETE' => $this->delete(),
            'DELETEPHOTO' => $this->deletephoto(),
            'SEARCH' => $this->cari(),
            default => $this->tambah()
        };

    }

    protected function album() {
        $judul = Input::get('judul');
        $keterangan = Input::get('keterangan');
        $kategori = Input::get('kategori');
        $cover = Input::get('cover');

        $input = DB::terhubung()->input('album', [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'cover' => $cover
        ]);

        if($input){
            return $this->success(DB::terhubung()->query("SELECT id FROM album WHERE judul = ? AND keterangan = ? ", [$judul, $keterangan])->teks());
        }else{
            return $this->badrequest("Gagal mengupload photo");
        }
    }

    protected function editalbum() {
        $judul = Input::get('judul');
        $keterangan = Input::get('keterangan');
        $kategori = Input::get('kategori');
        $cover = Input::get('cover');
        $id = Input::get('id');

        $perbarui = DB::terhubung()->perbarui('album', $id, [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'cover' => $cover
        ]);

        if($perbarui){
            return $this->success();
        }else{
            return $this->badrequest("Gagal mengupload photo");
        }
    }

    protected function tambah() {
        
        $keterangan = Input::get('keterangan');
        $album = Input::get('album');
        $gambar = Input::get('gambar');

        $input = DB::terhubung()->input('photo', [
            'keterangan' => $keterangan,
            'album' => $album,
            'gambar' => $gambar
        ]);

        if($input){
            return $this->success("OK");
        }else{
            return $this->badrequest("Gagal mengupload photo");
        }
    }

    protected function deletephoto() {
        $id = Input::get('id');
        $keterangan = DB::terhubung()->query("SELECT keterangan FROM photo WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("photo", [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            $this->success([
                'keterangan' => $keterangan,
                'id' => $id
            ]);
        }else{
            $this->badrequest("Gagal menghapus ".$keterangan);
        }
    }

    protected function delete() {
        $id = Input::get('id');
        $judul = DB::terhubung()->query("SELECT judul FROM album WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("album", [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            DB::terhubung()->hapus("photo", [
                'album', '=', $id
            ]);
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
            keterangan, 
            cover, 
            kategori
        FROM 
            album 
        WHERE 
            {$f} LIKE ?
        ORDER BY dibuat 
        DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }
    

}