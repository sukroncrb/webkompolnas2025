<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Config;
class seting extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->paragrap("kode");
        $schema->teks("tipe");
        $sql = $schema->create('seting');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        $data = [
            'smtp' => 'smtp',
            'port' => '465',
            'useremail' => 'useremail@email.com',
            'emailpsw' => 'emailpsw',
            'emailpengirim' => 'emailpengirim@email.com',
            'namapengirim' => 'namapengirim',
        ];

        $kode =  Generate::secretCode($data, Config::fromEnv('SECRET_KEY'));

        DB::terhubung()->input('seting', [
            'kode' => $kode,
            'tipe' => 'EMAIL_SERVICE'
        ]);

        $data = [
            'apikeyyoutube' => 'AIzaSyBXF22TpBW4gad2Ioeys3rZJr2nfX-fHQc',
            'channelid' => 'UCdFHg8HZCPgHiYmUclj_xRw',
        ];

        $kode =  Generate::secretCode($data, Config::fromEnv('SECRET_KEY'));
        
        DB::terhubung()->input('seting', [
            'kode' => $kode,
            'tipe' => 'YOUTUBE_SERVICE'
        ]);
    }
}
$create = new seting();
$create->buattabel();
