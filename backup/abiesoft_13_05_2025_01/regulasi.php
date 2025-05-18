<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class regulasi extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'judul', default: NULL);
        $schema->enum(nama:'bentuk', data:['Undang-undang','TAP MPR','Peraturan Presiden','Peraturan Kompolnas','Peraturan Polri','Peraturan Kapolri','Surat Edaran','Peraturan Menko']);
        $schema->teks(nama:'pemerkarsa', default: NULL);
        $schema->teks(nama:'nomor', default: NULL);
        $schema->paragrap(nama:'tentang');
        $schema->teks(nama:'pengundang', default: NULL);
        $schema->teks(nama:'tempatpenetapan', default: NULL);
        $schema->teks(nama:'penandatangan', default: NULL);
        $schema->tanggal(nama:'tanggalpenetapan');
        $schema->enum(nama:'status', data:['Masih Berlaku','Tidak Berlaku']);
        $schema->paragrap(nama:'dokumen');
        $sql = $schema->create('regulasi');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('regulasi', [
            'id' => '6d02d7d7-c5a5-4f14-98e5-4279bede9970',
            'judul' => 'Perpres 17 Tahun 2011',
            'bentuk' => 'Peraturan Presiden',
            'pemerkarsa' => 'Pemerintah Pusat',
            'nomor' => 'Nomor 17 Tahun 2011',
            'tentang' => 'Komisi Kepolisian Nasional',
            'pengundang' => 'Presiden Republik Indonesia',
            'tempatpenetapan' => 'Jakarta',
            'penandatangan' => 'Dr. H. Susilo Bambang Yudhoyono',
            'tanggalpenetapan' => '2011-03-04 00:00:00',
            'status' => 'Masih Berlaku',
            'dokumen' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/regulasi/4877ps17-2011.pdf',
            'dibuat' => '2025-05-12 23:40:58',
        ]);
    }
}
$create = new regulasi();
$create->buattabel();
