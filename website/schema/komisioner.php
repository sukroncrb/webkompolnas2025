<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class komisioner extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("nama");
        $schema->teks("jabatan");
        $schema->teks("periode");
        $schema->paragrap("keterangan");
        $schema->paragrap("photo");
        $sql = $schema->create('komisioner');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('komisioner', [
                'nama' => '',
            ]);
        */
    }
}
$create = new komisioner();
$create->buattabel();
