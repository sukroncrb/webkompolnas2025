<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class buku extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'judul', default: NULL);
        $schema->paragrap(nama:'keterangan');
        $schema->teks(nama:'penulis', default: NULL);
        $schema->teks(nama:'isbn', default: NULL);
        $schema->tanggal(nama:'terbit');
        $schema->teks(nama:'penerbit', default: NULL);
        $schema->teks(nama:'kategori', default: NULL);
        $schema->paragrap(nama:'cover');
        $schema->paragrap(nama:'link');
        $schema->angka(nama:'didownload', default: 0);
        $schema->angka(nama:'dibagikan', default: 0);
        $schema->angka(nama:'disukai', default: 0);
        $sql = $schema->create('buku');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('buku', [
            'id' => 'c41234eb-1bb2-4ce7-a91d-a510aea9c9da',
            'judul' => 'Laporan Tahunan',
            'keterangan' => 'Buku laporan Tahunan tahun 2025',
            'penulis' => 'Adeline Palmerston',
            'isbn' => '0000',
            'terbit' => '2025-05-08 00:00:00',
            'penerbit' => 'Borcelle',
            'kategori' => 'Laporan Tahunan',
            'cover' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/buku/86241131w-X1Vmonr8tcg.jpg',
            'link' => 'https://bukuonline.com',
            'didownload' => 54,
            'dibagikan' => 32,
            'disukai' => 0,
            'dibuat' => '2025-05-08 12:27:52',
        ]);
    }
}
$create = new buku();
$create->buattabel();
