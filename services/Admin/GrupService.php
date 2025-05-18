<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;

final class GrupService extends Service
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
        $data = DB::terhubung()->query("SELECT id, nama FROM grup ORDER BY dibuat DESC")->hasil();
        echo $this->success($data);
    }

    protected function post() {
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            'DELETE' => $this->delete(),
            'SEARCH' => $this->cari(),
            default => $this->tambah()
        };

    }

    protected function tambah() {
        $nama = Input::get('nama');
        $exist = DB::terhubung()->query("SELECT nama FROM grup WHERE nama = ? ", [$nama])->teks();
        if($exist == $nama){
            $this->badrequest("Grup <strong>".$nama."</strong> sudah ada");
        }else{
            $input = DB::terhubung()->input('grup',[
                'nama' => $nama
            ]);
            if($input){
                $this->success([
                    'nama' => $nama
                ]);
            }else{
                $this->badrequest("Gagal menginput data");
            }
        }
    }

    protected function delete() {
        $id = Input::get('id');
        $nama = DB::terhubung()->query("SELECT nama FROM grup WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus("grup", [
            'id',
            '=',
            $id
        ]);
        if($hapus){
            $this->success([
                'nama' => $nama
            ]);
        }else{
            $this->badrequest("Gagal menghapus <strong>".$nama."</strong>");
        }
    }

    protected function cari() {
        $f = Input::get('opsi');
        $keyword = Input::get('keyword');
        $data = DB::terhubung()->query("SELECT id, nama FROM grup WHERE {$f} LIKE ? ORDER BY dibuat DESC",["%".$keyword."%"])->hasil();
        return $this->success($data);
    }

}