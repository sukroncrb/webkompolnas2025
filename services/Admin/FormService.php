<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Service\Service;
use App\Service\Upload;
use DateTime;

final class FormService extends Service
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
            'pengaduan' => $this->datapengaduan(),
            'ppid' => $this->datappid(),
            default => $this->badrequest("Gagal meload data")
        };
    }

    protected function datapengaduan() {
        $pengaduan = DB::terhubung()->query("SELECT id, nomor, nama, dibuat from pengaduan ORDER BY dibuat DESC ")->hasil();
        return $this->success($pengaduan);
    }

    protected function datappid() {
        $ppid = DB::terhubung()->query("SELECT id, nomor, nama, dibuat from ppid ORDER BY dibuat DESC ")->hasil();
        return $this->success($ppid);
    }
    
    protected function post() {
        
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            'SEARCH' => $this->search(),
            'DELETE' => $this->delete(),
            'PENGADUAN' => $this->pengaduan(),
            'PPID' => $this->ppid(),
            default => $this->pengaduan()
        };

    }

    protected function pengaduan() {

        if(is_array($this->publicupload('dokumen'))){
            return $this->publicupload('dokumen');
        }

        $nomor = 0;
        $ceknomor = DB::terhubung()->query("SELECT urutan FROM nomor WHERE model = ?",[strtolower(Input::get('tipe'))]);
        if($ceknomor->hitung() == 0){
            DB::terhubung()->input("nomor", [
                'model' => strtolower(Input::get('tipe')),
                'urutan' => 0
            ]);
            $nomor = 1;
        }else{
            $nomor = ((int) $ceknomor->teks() + 1);
        }

        $nomorurut = "";

        if(strlen($nomor) == 1){
            $nomorurut = "00".$nomor;
        } else if(strlen($nomor) == 2){
            $nomorurut = "0".$nomor;
        } else {
            $nomorurut = $nomor;
        }

        $nomorregistrasi = "SKM.OL.".date('Ymd').$nomorurut;

        $input = DB::terhubung()->input('pengaduan', [
            "nomor" => $nomorregistrasi,
            "email" => Input::get('email'),
            "noktp" => Input::get('noktp'),
            "nama" => Input::get('nama'),
            "tempatlahir" => Input::get('tempatlahir'),
            "tgllahir" => Input::get('tgllahir'),
            "alamat" => Input::get('alamat'),
            "pekerjaan" => Input::get('pekerjaan'),
            "nohp" => Input::get('nohp'),
            "satuanterlapor" => Input::get('satuanterlapor'),
            "namaterlapor" => Input::get('namaterlapor'),
            "bentukperbuatan" => Input::get('bentukperbuatan'),
            "kerugian" => Input::get('kerugian'),
            "kronologi" => Input::get('kronologi'),
            "dokumen" => Input::get('dokumen'),
        ]);

        if($input){
            DB::terhubung()->query("UPDATE nomor SET urutan = '$nomor' WHERE model = ? ", [strtolower(Input::get('tipe'))]);
            return $this->success($_POST);
        }
        
        return $this->badrequest("Gagal membuat pengaduan");
    }

    protected function ppid() {

        $nomor = 0;
        $ceknomor = DB::terhubung()->query("SELECT urutan FROM nomor WHERE model = ?",[strtolower(Input::get('tipe'))]);
        if($ceknomor->hitung() == 0){
            DB::terhubung()->input("nomor", [
                'model' => strtolower(Input::get('tipe')),
                'urutan' => 0
            ]);
            $nomor = 1;
        }else{
            $nomor = ((int) $ceknomor->teks() + 1);
        }

        $nomorurut = "";

        if(strlen($nomor) == 1){
            $nomorurut = "00".$nomor;
        } else if(strlen($nomor) == 2){
            $nomorurut = "0".$nomor;
        } else {
            $nomorurut = $nomor;
        }

        $nomorregistrasi = "PPID.".date('Ymd').$nomorurut;

        $input = DB::terhubung()->input('ppid', [
            "nomor" => $nomorregistrasi,
            "email" => Input::get('email'),
            "noktp" => Input::get('noktp'),
            "nama" => Input::get('nama'),
            "alamat" => Input::get('alamat'),
            "pekerjaan" => Input::get('pekerjaan'),
            "nohp" => Input::get('nohp'),
            "informasi" => Input::get('informasi'),
            "tujuan" => Input::get('tujuan'),
        ]);

        if($input){
            DB::terhubung()->query("UPDATE nomor SET urutan = '$nomor' WHERE model = ? ", [strtolower(Input::get('tipe'))]);
            return $this->success($_POST);
        }
        
        return $this->badrequest("Gagal membuat permohonan");
    }

    protected function search () {
        $tabel = Input::get('tabel');
        $keyword = Input::get('keyword');
        $opsi = Input::get('opsi');
        $data = DB::terhubung()->query("
            SELECT 
                id, 
                nomor, 
                nama, 
                dibuat 
            FROM 
                ".$tabel."
            WHERE
                ".$opsi." LIKE ?
            ORDER BY 
                dibuat 
            DESC ",
            ['%'.$keyword.'%'])->hasil();
        return $this->success($data);
    }

    protected function delete() {
        
        $id = Input::get('id');
        $tabel = Input::get('tabel');
        $nomor = DB::terhubung()->query("SELECT nomor FROM ".$tabel." WHERE id = ? ",[$id])->teks();
        $hapus = DB::terhubung()->hapus($tabel, [
            'id',
            '=',
            $id
        ]);

        if($hapus){
            return $this->success([
                'id' => $id,
                'nomor' => $nomor
            ]);
        }else{
            return $this->badrequest("Gagal menghapus data");
        }

    }


}