<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class pengaduan extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks("nomor");
        $schema->teks("email");
        $schema->teks("noktp");
        $schema->teks("nama");
        $schema->teks("tempatlahir");
        $schema->teks("tgllahir");
        $schema->paragrap("alamat");
        $schema->teks("pekerjaan");
        $schema->teks("nohp");
        $schema->teks("satuanterlapor");
        $schema->teks("namaterlapor");
        $schema->paragrap("bentukperbuatan");
        $schema->paragrap("kerugian");
        $schema->paragrap("kronologi");
        $schema->paragrap("dokumen");
        $sql = $schema->create('pengaduan');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        /*
            DB::terhubung()->input('pengaduan', [
                'nama' => '',
            ]);
        */
    }
}
$create = new pengaduan();
$create->buattabel();
