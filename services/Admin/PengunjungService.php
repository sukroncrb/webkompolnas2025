<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use App\Service\Service;
use App\Service\Upload;
use DateTime;

final class PengunjungService extends Service
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

        $dt = new DateTime(); // Ambil tanggal hari ini
        $hari = $dt->format('N'); // Dapatkan nomor hari (Senin = 1, Minggu = 7)
        $mulai = clone $dt;
        $mulai->modify('-' . ($hari - 1) . ' days'); // Dapatkan Senin minggu ini
        $akhir = clone $dt;
        $akhir->modify('+' . (7 - $hari) . ' days'); // Dapatkan Minggu minggu ini

        $senin = $mulai->format('Y-m-d') . "\n";
        $minggu = $akhir->format('Y-m-d') . "\n";

        $data = [
            'hari_ini' => number_format(DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ",['%'.date("Y-m-d").'%'])->hitung()),
            'kemarin' => number_format(DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ",['%'.date("Y-m-d", strtotime('-1 day')).'%'])->hitung()),
            'minggu_ini' => number_format(DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat BETWEEN '".$senin."' AND '".$minggu."' ")->hitung()),
            'bulan_ini' => number_format(DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ",['%-'.date("m").'-%'])->hitung()),
            'tahun_ini' => number_format(DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ",['%'.date("Y").'-%'])->hitung()),
            'total' => number_format(DB::terhubung()->query("SELECT id FROM pengunjung")->hitung()),
        ];
        return $this->success($data);
    }
    
    protected function post() {
        
        // $csrf = Input::get('__csrf');
        // if(!Guard::csrf($csrf)){
        //     return $this->badrequest("Token Expire");
        // }

        // $tipe = Input::get('tipe');
        // return match($tipe) {
        //     'UPLOAD' => $this->upload(),
        //     'PATCH' => $this->update(),
        //     'DELETE' => $this->delete(),
        //     'SEARCH' => $this->cari(),
        //     default => $this->tambah()
        // };

    }


}