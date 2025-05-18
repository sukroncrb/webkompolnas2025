<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use App\Service\Service;
final class PlusoneService extends Service
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
        $tabel = $param[0];
        $kolom = $param[1];
        $id = $param[2];
        $angkasebelumnya = DB::terhubung()->query("SELECT {$kolom} FROM {$tabel} WHERE id = ? ",[$id])->angka();
        DB::terhubung()->perbarui($tabel,$id,[
            $kolom => $angkasebelumnya + 1
        ]);
        $angkasetelahnya = DB::terhubung()->query("SELECT {$kolom} FROM {$tabel} WHERE id = ? ",[$id])->angka();
        $this->success(['jumlah' => $angkasetelahnya]);
    }

    protected function post() {
        // 
    }

}