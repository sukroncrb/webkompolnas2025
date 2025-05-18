<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class info extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("nama");
        $schema->paragrap("alamat");
        $schema->teks("latitude");
        $schema->teks("longitude");
        $schema->teks("email");
        $schema->teks("notlp");
        $schema->teks("fax");
        $schema->teks("youtube");
        $schema->teks("facebook");
        $schema->teks("instagram");
        $schema->teks("twitter");
        $schema->teks("tiktok");
        $sql = $schema->create('info');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        DB::terhubung()->input('info', [
            'id' => 'd33a4003-a12e-459a-92cc-767fd4bfca5d',
            'nama' => 'KOMPOLNAS',
            'alamat' => 'Jl. Tirtayasa VII No. 20 Kebayoran Baru Jakarta Selatan 12160',
            'latitude' => '-6.243166845757739',
            'longitude' => '106.80688103159432',
            'email' => 'sekretariat@kompolnas.go.id',
            'notlp' => '021 7392315',
            'fax' => '021 7392317',
            'youtube' => 'https://www.youtube.com/@kompolnas_ri',
            'facebook' => 'https://www.facebook.com/KompolnasOfficial',
            'instagram' => 'https://www.instagram.com/kompolnas_ri/',
            'twitter' => 'https://x.com/kompolnas_ri',
            'tiktok' => 'https://www.tiktok.com/@kompolnas_ri',
            'dibuat' => '2025-05-10 07:38:08',
        ]);
    }
}
$create = new info();
$create->buattabel();
