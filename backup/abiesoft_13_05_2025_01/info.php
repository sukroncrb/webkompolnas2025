<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class info extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'nama', default: NULL);
        $schema->paragrap(nama:'alamat');
        $schema->teks(nama:'latitude', default: NULL);
        $schema->teks(nama:'longitude', default: NULL);
        $schema->teks(nama:'email', default: NULL);
        $schema->teks(nama:'notlp', default: NULL);
        $schema->teks(nama:'fax', default: NULL);
        $schema->teks(nama:'youtube', default: NULL);
        $schema->teks(nama:'facebook', default: NULL);
        $schema->teks(nama:'instagram', default: NULL);
        $schema->teks(nama:'twitter', default: NULL);
        $schema->teks(nama:'tiktok', default: NULL);
        $sql = $schema->create('info');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('info', [
            'id' => '2186e5ea-dd35-4e3f-bd39-46bae39adf6b',
            'dibuat' => '2025-05-10 13:12:26',
        ]);
        
        DB::terhubung()->input('info', [
            'id' => '6128b2df-e3c2-4b2b-8d76-107c8d3c91b7',
            'dibuat' => '2025-05-10 13:12:29',
        ]);
        
        DB::terhubung()->input('info', [
            'id' => 'd33a4003-a12e-459a-92cc-767fd4bfca5d',
            'nama' => 'KOMPOLNAS',
            'alamat' => 'Jl. Tirtayasa VII No. 20 Kebayoran Baru Jakarta Selatan 12160',
            'latitude' => '-6.243166845757739',
            'longitude' => '106.80688103159432',
            'email' => 'sekretariat@kompolnas.go.ida',
            'notlp' => '021 7392315',
            'fax' => '021 7392317',
            'youtube' => 'https://www.youtube.com/@kompolnas_ri',
            'facebook' => 'https://www.facebook.com/KompolnasOfficial',
            'instagram' => 'https://www.instagram.com/kompolnas_ri',
            'twitter' => 'https://x.com/kompolnas_ri',
            'tiktok' => 'https://www.tiktok.com/@kompolnas_ri',
            'dibuat' => '2025-05-10 07:38:08',
        ]);
    }
}
$create = new info();
$create->buattabel();
