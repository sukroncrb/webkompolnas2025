<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class statis extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("label");
        $schema->paragrap("keterangan");
        $schema->paragrap("media");
        $schema->teks("model");
        $schema->teks("link");
        $sql = $schema->create('statis');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
        DB::terhubung()->input('statis', [
            'label' => '',
            'keterangan' => '',
            'media' => '',
            'model' => '',
            'link' => '',
        ]);
    }
}
$create = new statis();
$create->buattabel();
