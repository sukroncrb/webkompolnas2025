<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class buku extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks('judul');
        $schema->paragrap('keterangan');
        $schema->teks('penulis');
        $schema->teks('isbn');
        $schema->tanggal('terbit');
        $schema->teks('penerbit');
        $schema->teks('kategori');
        $schema->paragrap('cover');
        $schema->paragrap('link');
        $schema->angka('didownload');
        $schema->angka('dibagikan');
        $schema->angka('disukai');
        $sql = $schema->create('buku');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('buku', [
                'nama' => '',
            ]);
        */
    }
}
$create = new buku();
$create->buattabel();
