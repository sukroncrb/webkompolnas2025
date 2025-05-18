<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Tanggal;
use App\Service\Service;
use App\Service\Upload;
use DateInterval;
use DatePeriod;
use DateTime;

final class DashboardService extends Service
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
        return match($param[0]){
            'pengunjung' => $this->pengunjung($param),
            default => $this->badrequest("Gagal meload data")
        };
    }

    protected function pengunjung($param) {

        if(isset($param[1])){
            $bulan = explode("-", $param[1])[1];
            $tahun = explode("-", $param[1])[0];
        }else{
            $bulan = date('m');
            $tahun = date('Y');
        }

        $tanggal_awal = new DateTime("$tahun-$bulan-01");
        $tanggal_akhir = new DateTime("$tahun-$bulan-" . cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun));
        $interval = new DateInterval('P1D'); // Interval 1 hari
        $periode = new DatePeriod($tanggal_awal, $interval, $tanggal_akhir->modify('+1 day')); // Tambahkan 1 hari agar tanggal akhir termasuk
        
        $hariini = date('Y-m-d');
        $pilihanbulan = [];
        $databulan = DB::terhubung()->query("SELECT DATE_FORMAT(dibuat, '%Y-%m') AS tahun_bulan FROM pengunjung GROUP BY tahun_bulan");
        foreach($databulan->hasil() as $db){
            array_push($pilihanbulan, [
                'value' => $db->tahun_bulan,
                'label' => Tanggal::bulanToString(explode("-",$db->tahun_bulan)[1])." ".explode("-",$db->tahun_bulan)[0]
            ]);
        }

        $data['totalpengunjung'] = DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ", ['%-'.$bulan.'-%'])->hitung();
        $data['pengunjunghariini'] = DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ",['%'.$hariini.'%'])->hitung();
        $data['pengunjung'] = [];
        $data['tanggal'] = [];
        $data['warna'] = [];
        $data['bulanini'] = Tanggal::bulanToString($bulan);
        $data['pilihanbulan'] = $pilihanbulan;
        $data['valueaktif'] = $tahun.'-'.$bulan;
        $data['labelaktif'] = Tanggal::bulanToString($bulan).' '.$tahun;
        $data['device'] = DB::terhubung()->query("SELECT device, COUNT(*) AS jumlah FROM pengunjung WHERE dibuat LIKE ? GROUP BY device", ['%'.$tahun.'-'.$bulan.'%'])->hasil();
        $data['os'] = DB::terhubung()->query("SELECT os, COUNT(*) AS jumlah FROM pengunjung WHERE dibuat LIKE ? GROUP BY os", ['%'.$tahun.'-'.$bulan.'%'])->hasil();
        foreach ($periode as $tanggal) {
            array_push($data['pengunjung'],DB::terhubung()->query("SELECT id FROM pengunjung WHERE dibuat LIKE ? ", ['%'.$tanggal->format('Y-m-d').'%'])->hitung());
            array_push($data['tanggal'],ltrim($tanggal->format('d'),'0'));
            if($tanggal->format('Y-m-d') == $hariini){
                array_push($data['warna'], 'var(--bs-primary)');
            }else{
                array_push($data['warna'], 'var(--bs-primary)');
            }
            
        }

        $this->success($data);
    }

    protected function post() {
        //
    }


}