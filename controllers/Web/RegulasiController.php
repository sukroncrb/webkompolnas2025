<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Tanggal;

final class RegulasiController extends Controller
{

    public function index($params) {
        if(isset($params)){
            if(isset($params[1])){
                $this->detailRegulasi($params[1]);
            }else{
                $this->listRegulasi($params[0]);
            }
        }else{
            Lanjut::ke();
        }
    }

    protected function listRegulasi($page) {
        $title = "";
        if($page == "uud-45"){ $title = "UUD 1945";  }
        else if($page == "tap-mpr-ri"){ $title = "TAP MPR RI"; }
        else if($page == "undang-undang"){ $title = "Undang-undang"; }
        else if($page == "peraturan-presiden"){ $title = "Peraturan Presiden"; }
        else if($page == "peraturan-kompolnas"){ $title = "Peraturan Kompolnas"; }
        else if($page == "peraturan-polri"){ $title = "Peraturan Polri"; }
        else if($page == "peraturan-kapolri"){ $title = "Peraturan Kapolri"; }
        else if($page == "surat-edaran"){ $title = "Surat Edaran"; }
        else if($page == "peraturan-menko"){ $title = "Peraturan Menko"; }
        else{
            Lanjut::ke();
        }

        $regulasi = [];
        if($page == "uud-45"){
            $regulasi = DB::terhubung()->query("SELECT id, judul, nomor, tanggalpenetapan, status FROM regulasi WHERE judul = ? ", [$title]);
        }else{
            $regulasi = DB::terhubung()->query("SELECT id, judul, nomor, tanggalpenetapan, status FROM regulasi WHERE bentuk = ? ", [$title]);
        }
        return $this->view(
            model: 'web',
            template: 'regulasi/list',
            data: [
                'title' => $title,
                'page' => $page,
                'regulasi' => $regulasi->hasil(),
                'jumlahdata' => $regulasi->hitung()
            ]
        );
    }

    protected function detailRegulasi($id) {

        if(DB::terhubung()->query("SELECT id FROM regulasi WHERE id = ?", [$id])->hitung() == 0){
            Lanjut::ke();
        }

        return $this->view(
            model: 'web',
            template: 'regulasi/detail',
            data: [
                'title' => 'Undang-undang Dasar 1945',
                'id' => $id,
                'judul' => DB::terhubung()->query("SELECT judul FROM regulasi WHERE id = ?", [$id])->teks(),
                'tentang' => DB::terhubung()->query("SELECT tentang FROM regulasi WHERE id = ?", [$id])->teks(),
                'bentuk' => DB::terhubung()->query("SELECT bentuk FROM regulasi WHERE id = ?", [$id])->teks(),
                'pemerkarsa' => DB::terhubung()->query("SELECT pemerkarsa FROM regulasi WHERE id = ?", [$id])->teks(),
                'nomor' => DB::terhubung()->query("SELECT nomor FROM regulasi WHERE id = ?", [$id])->teks(),
                'pengundang' => DB::terhubung()->query("SELECT pengundang FROM regulasi WHERE id = ?", [$id])->teks(),
                'tempatpenetapan' => DB::terhubung()->query("SELECT tempatpenetapan FROM regulasi WHERE id = ?", [$id])->teks(),
                'tanggalpenetapan' => Tanggal::full(DB::terhubung()->query("SELECT tanggalpenetapan FROM regulasi WHERE id = ?", [$id])->teks()),
                'penandatangan' => DB::terhubung()->query("SELECT penandatangan FROM regulasi WHERE id = ?", [$id])->teks(),
                'status' => DB::terhubung()->query("SELECT status FROM regulasi WHERE id = ?", [$id])->teks(),
                'dokumen' => DB::terhubung()->query("SELECT dokumen FROM regulasi WHERE id = ?", [$id])->teks(),
            ]
        );
    }

}
