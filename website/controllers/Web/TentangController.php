<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;

final class TentangController extends Controller
{

    public function index($params) {
        if(isset($params)){
            return match($params[0]){
                'sejarah' => $this->sejarah(),
                'arti-logo-dan-lambang' => $this->logo(),
                'visi-dan-misi' => $this->visimisi(),
                'tupoksi' => $this->tupoksi(),
                'struktur-organisasi' => $this->struktur(),
                'komisioner' => $this->komisioner($params),
                default => Lanjut::ke()
            };
        }else{
            Lanjut::ke();
        }
    }

    protected function sejarah() {
        return $this->view(
            model: 'web',
            template: 'tentang/sejarah',
            data: [
                'title' => 'Sejarah Kompolnas',
                'periode' => DB::terhubung()->query("SELECT id, periode FROM komisioner WHERE periode != ? GROUP BY periode ORDER BY dibuat ", ['Periode Saat ini'])->hasil(),
                'komisioner' => DB::terhubung()->query("SELECT id, nama, periode, jabatan, photo FROM komisioner WHERE periode != ? ORDER BY dibuat ", ['Periode Saat ini'])->hasil(),
            ]
        );
    }

    protected function logo() {
        return $this->view(
            model: 'web',
            template: 'tentang/logo',
            data: [
                'title' => 'Arti Logo dan Lambang Kompolnas',
            ]
        );
    }

    protected function visimisi() {
        return $this->view(
            model: 'web',
            template: 'tentang/visimisi',
            data: [
                'title' => 'Visi dan Misi Kompolnas',
            ]
        );
    }

    protected function tupoksi() {
        return $this->view(
            model: 'web',
            template: 'tentang/tupoksi',
            data: [
                'title' => 'Tugas Pokok dan Fungsi',
            ]
        );
    }

    protected function struktur() {
        return $this->view(
            model: 'web',
            template: 'tentang/struktur',
            data: [
                'title' => 'Struktur Organisasi',
            ]
        );
    }

    protected function komisioner($params) {
        $idkomisioner = "";
        if(isset($params[1])){
            $idkomisioner = $params[1];
        }
        return $this->view(
            model: 'web',
            template: 'tentang/komisioner',
            data: [
                'title' => 'Profil Komisioner Kompolnas',
                'komisioner' => DB::terhubung()->query("SELECT id, nama, jabatan, photo, keterangan FROM komisioner WHERE periode = ? ORDER BY dibuat ", ['Periode Saat ini'])->hasil(),
                'idkomisioner' => $idkomisioner
            ]
        );
    }

}
