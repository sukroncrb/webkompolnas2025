<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class grup extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'nama', default: 'NULL');
        $schema->teks(nama:'role', default: 'NULL');
        $sql = $schema->create('grup');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('grup', [
            'id' => '2e31aaef-62a0-47ac-abcd-8aed24fc0e04',
            'nama' => 'Standar User',
            'role' => 'standar',
            'dibuat' => '2025-03-14 22:57:03',
        ]);
        
        DB::terhubung()->input('grup', [
            'id' => '83f87019-d52b-4d9d-a406-68b0b6384e59',
            'nama' => 'Administrator',
            'role' => 'admin',
            'dibuat' => '2025-03-14 22:57:03',
        ]);
        
        DB::terhubung()->input('grup', [
            'id' => 'a1ae22bd-2462-4250-8ffd-ec69d122413b',
            'nama' => 'Penulis',
            'role' => 'NULL',
            'dibuat' => '2025-04-25 11:42:39',
        ]);
    }
}
$create = new grup();
$create->buattabel();
