<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class sesi extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'email', default: 'NULL');
        $schema->teks(nama:'kode', default: 'NULL', unique:true);
        $schema->teks(nama:'device', default: 'NULL');
        $schema->teks(nama:'os', default: 'NULL');
        $schema->teks(nama:'ip', default: 'NULL');
        $sql = $schema->create('sesi');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('sesi', [
            'id' => '19304477-19b7-4221-8787-adbc123d4758',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '4181',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-25 11:31:47',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => '1942e9ca-45dd-4ed0-bbe0-1944a18f7707',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '7414',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-05-08 15:23:48',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => '33304b85-b87a-4aa3-a62d-b039ada7e7e1',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '3252',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-29 23:04:28',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => '53dee5b4-e056-4b49-839f-9fb125ae64d9',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '7303',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-25 11:31:58',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => '54665b87-8650-4514-a78c-c83bc8fb65c0',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '604',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-25 11:39:06',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => 'd678942c-a6e1-41d8-bbfe-a63693db78fd',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '8216',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-25 11:31:48',
        ]);
    }
}
$create = new sesi();
$create->buattabel();
