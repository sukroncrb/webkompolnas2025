<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class pengumuman extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("judul");
        $schema->paragrap("keterangan");
        $schema->paragrap("banner");
        $schema->tanggal("expire");
        $schema->teks("model"); // popup
        $schema->teks("link");
        $schema->teks("status");
        $sql = $schema->create('pengumuman');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('pengumuman', [
                'nama' => '',
            ]);
        */
    }
}
$create = new pengumuman();
$create->buattabel();
