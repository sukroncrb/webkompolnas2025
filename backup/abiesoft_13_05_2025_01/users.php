<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class users extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'nama', default: 'NULL');
        $schema->teks(nama:'email', default: 'NULL');
        $schema->teks(nama:'nohp', default: 'NULL');
        $schema->teks(nama:'psw', default: 'NULL');
        $schema->teks(nama:'salt', default: 'NULL');
        $schema->teks(nama:'photo', default: 'NULL');
        $schema->teks(nama:'dir', default: 'NULL');
        $schema->teks(nama:'grupid', default: 'NULL');
        $sql = $schema->create('users');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('users', [
            'id' => '62fdfd68-124b-401a-9b1a-9dc82ba1b3e0',
            'nama' => 'Sukron',
            'email' => 'ooncherbon@gmail.com',
            'nohp' => '085161473784',
            'psw' => '227d68b8ab05c420260762c26d48432b9fe536e57e8386d65a4915d3e4a529bf',
            'salt' => '%ln0',
            'photo' => 'assets/storage/default/pp.jpg',
            'dir' => 'eb7182de-6109-4e6c-a44d-235237244ef5',
            'grupid' => '83f87019-d52b-4d9d-a406-68b0b6384e59',
            'dibuat' => '2025-04-25 11:20:33',
        ]);
        
        DB::terhubung()->input('users', [
            'id' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'nama' => 'Penulis',
            'email' => 'sukronsite@gmail.com',
            'nohp' => 'NULL',
            'psw' => '22c6034d492b515fbe3618b0852a80a4ed4f7356f7fd3fdbd6866a2950bb9467',
            'salt' => '%l$u',
            'photo' => 'assets/storage/default/pp.jpg',
            'dir' => 'NULL',
            'grupid' => 'a1ae22bd-2462-4250-8ffd-ec69d122413b',
            'dibuat' => '2025-04-25 11:42:56',
        ]);
    }
}
$create = new users();
$create->buattabel();
