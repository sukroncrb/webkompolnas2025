<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Tanggal;

final class BeritaController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'web',
            template: 'berita/index',
            data: [
                'title' => 'Berita',
            ]
        );
    }

    public function beritaKompolnas($params)
    {
        if(isset($params[1])){
            return $this->detail($params);
        }else{
            return $this->view(
                model: 'web',
                template: 'berita/kompolnas',
                data: [
                    'title' => 'Berita Kompolnas',
                ]
            );
        }
    }

    public function beritaPolri($params)
    {
        if(isset($params[1])){
            return $this->detail($params);
        }else{
            return $this->view(
                model: 'web',
                template: 'berita/polri',
                data: [
                    'title' => 'Berita Polri',
                ]
            );
        }
    }

    public function only($params)
    {
        if(isset($params[0])){
            return match($params[0]){
                'kompolnas' => $this->beritaKompolnas($params),
                'polri' => $this->beritaPolri($params),
                default => Lanjut::ke('berita')
            };
        }
        
        Lanjut::ke('berita');
    }

    public function detail($params)
    {
        $kategori = $params[0];
        $slug = $params[1];
        $berita = DB::terhubung()->query("SELECT id FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug]);
        if(!$berita->hitung()){
            Lanjut::ke('berita');
        }
        DB::terhubung()->perbarui("berita", $berita->teks(), [
            'dibaca' => ((int)DB::terhubung()->query("SELECT dibaca FROM berita WHERE id = ?", [$berita->teks()])->teks() + 1)
        ]);
        return $this->view(
            model: 'web',
            template: 'berita/detail',
            data: [
                'title' => 'Detail Berita',
                'kategori' => $kategori,
                'id' => DB::terhubung()->query("SELECT id FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug])->teks(),
                'slug' => $slug,
                'judul' => DB::terhubung()->query("SELECT judul FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug])->teks(),
                'gambar' => Config::Baseurl().DB::terhubung()->query("SELECT gambar FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug])->teks(),
                'isi' => html_entity_decode(DB::terhubung()->query("SELECT isi FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug])->teks()),
                'dibuat' => Tanggal::simpelAndTime(DB::terhubung()->query("SELECT dibuat FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug])->teks()),
                'oleh' => DB::terhubung()->query("SELECT nama FROM users WHERE id = ?", [DB::terhubung()->query("SELECT penulis FROM berita WHERE kategori = ? AND slug = ?", [$kategori,$slug])->teks()])->teks(),
            ]
        );
    }

}
