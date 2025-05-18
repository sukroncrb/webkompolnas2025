<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class ppid extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("nomor");
        $schema->teks("email");
        $schema->teks("noktp");
        $schema->teks("nama");
        $schema->paragrap("alamat");
        $schema->teks("pekerjaan");
        $schema->teks("nohp");
        $schema->teks("informasi");
        $schema->teks("tujuan");
        $sql = $schema->create('ppid');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('ppid', [
                'nama' => '',
            ]);
        */
    }
}
$create = new ppid();
$create->buattabel();
