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
            'id' => '33304b85-b87a-4aa3-a62d-b039ada7e7e1',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '3252',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-29 23:04:28',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => '443c34d4-5a35-4633-a5c4-dd6336505ee8',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '3594',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '140.213.18.184',
            'dibuat' => '2025-05-06 13:50:25',
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
            'id' => '8b55950b-9cbd-487b-a3c0-6ee5f8cfb367',
            'email' => 'fais@kompolnas.go.id',
            'kode' => '3132',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-07 08:28:46',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => '9e720c19-8a36-48c7-bf22-ab26c11e1a8a',
            'email' => 'fais@kompolnas.go.id',
            'kode' => '2559',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 14:55:36',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => 'b7d11dc8-ba74-45e2-a925-ca22d9241c6f',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '7132',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 04:45:31',
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
        
        DB::terhubung()->input('sesi', [
            'id' => 'dcc015f6-f956-4d10-8eec-3c71afcca907',
            'email' => 'fais@kompolnas.go.id',
            'kode' => '9522',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 13:52:58',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => 'ea51f182-eafa-480c-80e7-c7c6b81e156e',
            'email' => 'fais@kompolnas.go.id',
            'kode' => '7355',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 15:32:42',
        ]);
        
        DB::terhubung()->input('sesi', [
            'id' => 'fb8d3036-ef5a-4476-bf49-ce662bcb83ec',
            'email' => 'ooncherbon@gmail.com',
            'kode' => '2349',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 04:58:58',
        ]);
    }
}
$create = new sesi();
$create->buattabel();
