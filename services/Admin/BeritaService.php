<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;
use App\Service\Upload;

final class BeritaService extends Service
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
                default => $this->kategori($param)
            };
        }else{
            return $this->web();
        }
    }

    protected function web() {
        $data = DB::terhubung()->query("
            SELECT
                judul,
                kategori,
                dibuat as waktu,
                gambar,
                slug
            FROM
                berita
            WHERE 
                publikasi = ?
            ORDER BY
                dibuat 
            DESC
        ",['Terbit'])->hasil();
        $this->success($data);
    }

    protected function kategori($param) {
        
        $kategori = $param[0];

        if(isset($param[1])){
            return $this->kategoriWithID($param[0],$param[1]);
        }else{
            $limit = "";
            $dkategori = "";
            
            if(isset(explode("-",$kategori)[1])){
                if(explode("-",$kategori)[0] == 'home'){

                    $kategori = explode("-",$kategori)[1];
                    if($kategori == "kompolnas"){
                        $dkategori = " kategori = 'Kompolnas' AND ";
                        $limit = " LIMIT 6 ";
                    }else if($kategori == "polri"){
                        $dkategori = " kategori = 'Polri' AND ";
                        $limit = " LIMIT 6 ";
                    }else{
                        $dkategori = " ";
                        $limit = " LIMIT 3 ";
                    }
                    
                }else{
                    $limit = "";
                    $kategori = explode("-",$kategori)[1];
                }
            }

            $data = DB::terhubung()->query("
                SELECT
                    judul,
                    kategori,
                    dibuat as waktu,
                    gambar,
                    slug
                FROM
                    berita
                WHERE
                    $dkategori
                    publikasi = ?
                ORDER BY
                    dibuat
                DESC 
                $limit
            ",
            ['Terbit'])->hasil();

            $this->success($data);
        }

    }

    protected function kategoriWithID($kategori,$id) {
        $data = DB::terhubung()->query("
                SELECT
                    judul,
                    kategori,
                    dibuat as waktu,
                    gambar,
                    slug
                FROM
                    berita
                WHERE
                    kategori = ?
                    AND id != ?
                    AND publikasi = ?
                ORDER BY
                    RAND()
                DESC 
                LIMIT 6
            ",
            [$kategori, $id, 'Terbit'])->hasil();
        return $this->success($data);
    }

    protected function tabel() {
        $data = DB::terhubung()->query("SELECT judul, kategori, dibaca, publikasi, id FROM berita ORDER BY dibuat DESC")->hasil();
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
        $slug = Input::get('slug');
        $potongan = Input::get('potongan');
        $isi = Input::get('isi');
        $tag = Input::get('tag');
        $kategori = Input::get('kategori');
        $penulis = Input::get('penulis');
        $publikasi = Input::get('publikasi');
        $gambar = Input::get('gambar');

        $existslug = DB::terhubung()->query("SELECT slug FROM berita WHERE slug = ?", [$slug]);
        if($existslug->hitung()){
            return $this->badrequest("Judul seperti ini sudah pernah ada");
        }

        $input = DB::terhubung()->input('berita', [
            'judul' => $judul,
            'slug' => $slug,
            'potongan' => $potongan,
            'isi' => $isi,
            'tag' => $tag,
            'kategori' => $kategori,
            'penulis' => $penulis,
            'gambar' => $gambar,
            'publikasi' => $publikasi
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
        $slug = Input::get('slug');
        $potongan = Input::get('potongan');
        $isi = Input::get('isi');
        $tag = Input::get('tag');
        $kategori = Input::get('kategori');
        $penulis = Input::get('penulis');
        $gambar = Input::get('gambar');
        $publikasi = Input::get('publikasi');

        $existslug = DB::terhubung()->query("SELECT slug FROM berita WHERE slug = ? AND penulis != ?", [$slug, $penulis]);
        if($existslug->hitung()){
            return $this->badrequest("Judul seperti ini sudah pernah ada");
        }

        $perbarui = DB::terhubung()->perbarui('berita', $id,[
            'judul' => $judul,
            'slug' => $slug,
            'potongan' => $potongan,
            'isi' => $isi,
            'tag' => $tag,
            'kategori' => $kategori,
            'penulis' => $penulis,
            'publikasi' => $publikasi,
            'gambar' => $gambar
        ]);
        if($perbarui){
            return $this->success();
        }else{
            return $this->badrequest("Gagal memperbarui data");
        }
    }

    protected function delete() {
        $id = Input::get('id');
        $judul = DB::terhubung()->query("SELECT judul FROM berita WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("berita", [
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
            judul, 
            kategori, 
            dibaca, 
            publikasi, 
            id
        FROM 
            berita 
        WHERE 
            {$f} LIKE ?
        ORDER BY dibuat 
        DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }
    

}