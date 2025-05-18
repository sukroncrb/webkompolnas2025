<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class nomor extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'model', default: 'NULL');
        $schema->angka(nama:'urutan', default: 0);
        $sql = $schema->create('nomor');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('nomor', [
            'id' => '96225c0f-5919-464b-972e-218178e055e2',
            'model' => 'pengaduan',
            'urutan' => 6,
            'dibuat' => '2025-04-29 16:46:01',
        ]);
        
        DB::terhubung()->input('nomor', [
            'id' => 'a516a67d-3cf1-4b75-b1ed-1301898bee51',
            'model' => 'ppid',
            'urutan' => 1,
            'dibuat' => '2025-04-29 17:19:59',
        ]);
    }
}
$create = new nomor();
$create->buattabel();
