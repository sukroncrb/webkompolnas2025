<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class regulasi extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("judul");
        $schema->enum(nama:"bentuk",data:[
            'Undang-undang',
            'TAP MPR RI',
            'Peraturan Presiden',
            'Peraturan Kompolnas',
            'Peraturan Polri',
            'Peraturan Kapolri',
            'Surat Edaran',
            'Peraturan Menko'
        ]);
        $schema->teks("pemerkarsa");
        $schema->teks("nomor");
        $schema->paragrap("tentang");
        $schema->teks("pengundang");
        $schema->teks("tempatpenetapan");
        $schema->tanggal("tanggalpenetapan");
        $schema->teks("penandatangan");
        $schema->enum(nama:"status",data:['Masih Berlaku','Tidak Berlaku']);
        $schema->paragrap("dokumen");
        $sql = $schema->create('regulasi');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('regulasi', [
                'nama' => '',
            ]);
        */
    }
}
$create = new regulasi();
$create->buattabel();
