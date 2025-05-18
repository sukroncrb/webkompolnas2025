<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class pengumuman extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'judul', default: NULL);
        $schema->paragrap(nama:'keterangan');
        $schema->paragrap(nama:'banner');
        $schema->tanggal(nama:'expire');
        $schema->teks(nama:'model', default: NULL);
        $schema->teks(nama:'link', default: NULL);
        $schema->teks(nama:'status', default: NULL);
        $sql = $schema->create('pengumuman');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('pengumuman', [
            'id' => '9a4e01ca-ac4c-4186-8960-b218efa4a900',
            'judul' => 'Kompolnas Award',
            'keterangan' => 'Kompolnas Award',
            'banner' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/pengumuman/3869flyer_(1).png',
            'expire' => '2025-05-11 00:00:00',
            'model' => 'Popup',
            'link' => 'https://bukuonline.com',
            'status' => 'Terbit',
            'dibuat' => '2025-05-11 11:09:20',
        ]);
    }
}
$create = new pengumuman();
$create->buattabel();
