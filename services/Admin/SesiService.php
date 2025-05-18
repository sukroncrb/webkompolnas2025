<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Utilities\Reader;
use Abiesoft\Resource\Utilities\Tanggal;
use App\Service\Service;

final class SesiService extends Service
{
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

        $kode = Reader::secretCode(Cookies::lihat('_sc'),Config::fromEnv('SECRET_KEY'))['kode'];
        $sesi = DB::terhubung()->query("SELECT id, device, os, ip, dibuat FROM sesi WHERE email = ? AND kode != ? ", [$this->getEmail(),$kode]);
        
        $data = "
            <div class='alert bg-light-subtle text-center p-4'>Tidak ada perangkat lan yang terhubung dengan akun ini.</div>
        ";
        
        if($sesi->hitung()){
            $data = '';
            $perangkat = "ti-device-mobile";
            foreach($sesi->hasil() as $s) {

                if($s->device == "Komputer/ Laptop"){
                    $perangkat = 'ti-device-laptop';
                }
                $data .= '
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ti '.$perangkat.' text-dark d-block fs-7" width="26" height="26"></i>
                            <div>
                                <h5 class="fs-4 fw-semibold mb-0">'.$s->os.'</h5>
                                <p class="mb-0">'.Tanggal::simpelAndTime($s->dibuat).'</p>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)">
                            <i class="ti ti-logout"></i>
                        </a>
                    </div>
                ';
            }
        }

        return $this->success($data);
    }

    protected function post() {
       
    }

}