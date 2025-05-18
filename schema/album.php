<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class album extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks('cover');
        $schema->teks('judul');
        $schema->paragrap('keterangan');
        $schema->teks('kategori');
        $sql = $schema->create('album');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('album', [
                'nama' => '',
            ]);
        */
    }
}
$create = new album();
$create->buattabel();
