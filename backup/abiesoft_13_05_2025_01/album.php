<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class album extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'cover', default: NULL);
        $schema->teks(nama:'judul', default: NULL);
        $schema->paragrap(nama:'keterangan');
        $schema->teks(nama:'kategori', default: NULL);
        $sql = $schema->create('album');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('album', [
            'id' => '83a47caa-60f6-4c3c-8404-576a99663ab6',
            'cover' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/galeri/5635IMG_20250422_213913.jpg',
            'judul' => 'Kunjungan kerja ke Polda Sumatera Utara',
            'keterangan' => 'Anggota Kompolnas Kunjungan kerja ke Polda Sumatera Utara',
            'kategori' => 'Kunjungan Kerja',
            'dibuat' => '2025-05-08 14:25:05',
        ]);
    }
}
$create = new album();
$create->buattabel();
