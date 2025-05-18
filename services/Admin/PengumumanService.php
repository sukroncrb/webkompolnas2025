<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;
use App\Service\Upload;

final class PengumumanService extends Service
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
        $data = DB::terhubung()->query("SELECT id, judul, keterangan, banner, expire, link, status FROM pengumuman ORDER BY dibuat DESC")->hasil();
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
        $banner = Input::get('banner');
        $expire = Input::get('expire');
        $model = Input::get('model');
        $link = Input::get('link');
        $status = Input::get('status');

        $already = DB::terhubung()->query("SELECT id FROM pengumuman WHERE judul = ? AND keterangan = ? ", [$judul,$keterangan]);
        if($already->hitung()){
            return $this->badrequest("Pengumuman ini sudah ada");
        }

        $input = DB::terhubung()->input('pengumuman', [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'banner' => $banner,
            'expire' => $expire,
            'model' => $model,
            'link' => $link,
            'status' => $status
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
        $banner = Input::get('banner');
        $expire = Input::get('expire');
        $model = Input::get('model');
        $link = Input::get('link');
        $status = Input::get('status');

        $already = DB::terhubung()->query("SELECT id FROM pengumuman WHERE judul = ? AND keterangan = ? AND id != ?", [$judul,$keterangan,$id]);
        if($already->hitung()){
            return $this->badrequest("Pengumuman ini sudah ada");
        }

        $perbarui = DB::terhubung()->perbarui('pengumuman', $id, [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'banner' => $banner,
            'expire' => $expire,
            'model' => $model,
            'link' => $link,
            'status' => $status
        ]);
        if($perbarui){
            return $this->success();
        }else{
            return $this->badrequest("Gagal memperbarui data");
        }
    }



    protected function delete() {
        $id = Input::get('id');
        $judul = DB::terhubung()->query("SELECT judul FROM pengumuman WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("pengumuman", [
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
            keterangan, 
            banner, 
            expire, 
            link, 
            status
        FROM 
            pengumuman 
        WHERE 
            {$f} LIKE ?
        ORDER BY dibuat 
        DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }
    

}