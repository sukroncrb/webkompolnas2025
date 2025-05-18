<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class photo extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks('gambar');
        $schema->paragrap('keterangan');
        $schema->teks('album');
        $sql = $schema->create('photo');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('photo', [
                'nama' => '',
            ]);
        */
    }
}
$create = new photo();
$create->buattabel();
