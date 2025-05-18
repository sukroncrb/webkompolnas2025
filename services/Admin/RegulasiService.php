<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;
use App\Service\Upload;

final class RegulasiService extends Service
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
        //         regulasi
        //     ORDER BY
        //         dibuat 
        //     DESC
        // ")->hasil();
        // $this->success($data);
    }

    protected function tabel() {
        $data = DB::terhubung()->query("
        SELECT
            id,
            judul,
            tentang,
            nomor,
            bentuk,
            dokumen,
            status
        FROM 
            regulasi 
        ORDER 
            BY dibuat 
        DESC")->hasil();
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
        $bentuk = Input::get('bentuk');
        $pemerkarsa = Input::get('pemerkarsa');
        $nomor = Input::get('nomor');
        $tentang = Input::get('tentang');
        $pengundang = Input::get('pengundang');
        $tempatpenetapan = Input::get('tempatpenetapan');
        $tanggalpenetapan = Input::get('tanggalpenetapan');
        $penandatangan = Input::get('penandatangan');
        $status = Input::get('status');
        $dokumen = Input::get('dokumen');

        $already = DB::terhubung()->query("SELECT id FROM regulasi WHERE judul = ? AND nomor = ? ", [$judul,$nomor]);
        if($already->hitung()){
            return $this->badrequest("Regulasi ini sudah ada");
        }

        $input = DB::terhubung()->input('regulasi', [
            'judul' => $judul,
            'bentuk' => $bentuk,
            'pemerkarsa' => $pemerkarsa,
            'nomor' => $nomor,
            'tentang' => $tentang,
            'pengundang' => $pengundang,
            'tempatpenetapan' => $tempatpenetapan,
            'tanggalpenetapan' => $tanggalpenetapan,
            'penandatangan' => $penandatangan,
            'status' => $status,
            'dokumen' => $dokumen
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
        $bentuk = Input::get('bentuk');
        $pemerkarsa = Input::get('pemerkarsa');
        $nomor = Input::get('nomor');
        $tentang = Input::get('tentang');
        $pengundang = Input::get('pengundang');
        $tempatpenetapan = Input::get('tempatpenetapan');
        $tanggalpenetapan = Input::get('tanggalpenetapan');
        $penandatangan = Input::get('penandatangan');
        $status = Input::get('status');
        $dokumen = Input::get('dokumen');

        $already = DB::terhubung()->query("SELECT id FROM regulasi WHERE judul = ? AND nomor = ? AND id != ?", [$judul,$nomor,$id]);
        if($already->hitung()){
            return $this->badrequest("Regulasi ini sudah ada");
        }

        $perbarui = DB::terhubung()->perbarui('regulasi', $id, [
            'judul' => $judul,
            'bentuk' => $bentuk,
            'pemerkarsa' => $pemerkarsa,
            'nomor' => $nomor,
            'tentang' => $tentang,
            'pengundang' => $pengundang,
            'tempatpenetapan' => $tempatpenetapan,
            'tanggalpenetapan' => $tanggalpenetapan,
            'penandatangan' => $penandatangan,
            'status' => $status,
            'dokumen' => $dokumen
        ]);
        if($perbarui){
            return $this->success();
        }else{
            return $this->badrequest("Gagal memperbarui data");
        }
    }

    protected function delete() {
        $id = Input::get('id');
        $judul = DB::terhubung()->query("SELECT judul FROM regulasi WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("regulasi", [
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
            tentang,
            nomor,
            bentuk,
            dokumen,
            status
        FROM 
            regulasi 
        WHERE 
            {$f} LIKE ?
        ORDER BY dibuat 
        DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }
    

}