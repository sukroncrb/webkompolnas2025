<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class photo extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'gambar', default: NULL);
        $schema->paragrap(nama:'keterangan');
        $schema->teks(nama:'album', default: NULL);
        $sql = $schema->create('photo');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('photo', [
            'id' => '950eaa49-714e-4e22-8cdc-72533f9e77dc',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/galeri/598205149055-aa5c-4b58-a262-7a1ccf378c15.jpg',
            'keterangan' => 'Anggota Kompolnas sedang melakukan  klarifikasi SKM',
            'album' => '83a47caa-60f6-4c3c-8404-576a99663ab6',
            'dibuat' => '2025-05-08 14:31:49',
        ]);
        
        DB::terhubung()->input('photo', [
            'id' => 'c6e70ee8-cbe0-4f3e-863b-bf5f7dd4696c',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/galeri/464060206653ysf.jpeg',
            'keterangan' => 'Sedang membantu menanam',
            'album' => '83a47caa-60f6-4c3c-8404-576a99663ab6',
            'dibuat' => '2025-05-08 15:03:49',
        ]);
    }
}
$create = new photo();
$create->buattabel();
