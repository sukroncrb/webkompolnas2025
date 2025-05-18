<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Tanggal;

final class PublikasiController extends Controller
{

    public function index($params) {
        if(isset($params)){
            return match($params[0]){
                'buku' => $this->buku($params),
                'video' => $this->video($params),
                'photo' => $this->photo($params),
                default => Lanjut::ke()
            };
        }else{
            Lanjut::ke();
        }
    }

    protected function buku($params) {
        if(isset($params[2])){
            return $this->detailBuku($params[1]);
        }else{
            return $this->view(
                model: 'web',
                template: 'publikasi/buku',
                data: [
                    'title' => 'Publikasi Buku',
                ]
            );
        }
    }

    protected function detailBuku($id) {
        $already = DB::terhubung()->query("SELECT id FROM buku WHERE id = ? ",[$id]);
        if(!$already->hitung()){
            Lanjut::ke('data-dan-publikasi/buku');
        }

        return $this->view(
            model: 'web',
            template: 'publikasi/detail-buku',
            data: [
                'title' => 'Detail Buku',
                'id' => $id,
                'judul' => DB::terhubung()->query("SELECT judul FROM buku WHERE id = ? ",[$id])->teks(),
                'keterangan' => DB::terhubung()->query("SELECT keterangan FROM buku WHERE id = ? ",[$id])->teks(),
                'cover' => Config::Baseurl().DB::terhubung()->query("SELECT cover FROM buku WHERE id = ? ",[$id])->teks(),
                'penulis' => DB::terhubung()->query("SELECT penulis FROM buku WHERE id = ? ",[$id])->teks(),
                'terbit' => Tanggal::simpel(DB::terhubung()->query("SELECT terbit FROM buku WHERE id = ? ",[$id])->teks()),
                'penerbit' => DB::terhubung()->query("SELECT penerbit FROM buku WHERE id = ? ",[$id])->teks(),
                'isbn' => DB::terhubung()->query("SELECT isbn FROM buku WHERE id = ? ",[$id])->teks(),
                'linkdownload' => DB::terhubung()->query("SELECT link FROM buku WHERE id = ? ",[$id])->teks(),
                'didownload' => DB::terhubung()->query("SELECT didownload FROM buku WHERE id = ? ",[$id])->teks(),
                'dibagikan' => DB::terhubung()->query("SELECT dibagikan FROM buku WHERE id = ? ",[$id])->teks(),
            ]
        );
    }

    protected function video($params) {
        if(isset($params[1])){
            return $this->view(
                model: 'web',
                template: 'publikasi/video-detail',
                data: [
                    'title' => 'Publikasi Video',
                    'id' => $params[1]
                ]
            );
        }else{
            return $this->view(
                model: 'web',
                template: 'publikasi/video',
                data: [
                    'title' => 'Publikasi Video',
                ]
            );
        }
    }

    protected function photo($params) {
        
        if(isset($params[2])){
            return $this->detailphoto($params[1],$params[2]);
        }else{
            return $this->view(
                model: 'web',
                template: 'publikasi/photo',
                data: [
                    'title' => 'Publikasi Photo',
                ]
            );
        }
    }

    protected function detailphoto($id) {
        return $this->view(
            model: 'web',
            template: 'publikasi/photo-album',
            data: [
                'title' => DB::terhubung()->query("SELECT judul FROM album WHERE id = ?", [$id])->teks(),
                'photo' => DB::terhubung()->query("SELECT gambar, keterangan FROM photo WHERE album = ?", [$id])
            ]
        );
    }

}
