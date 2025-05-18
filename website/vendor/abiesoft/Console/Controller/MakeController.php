<?php

namespace Abiesoft\Resource\Console\Controller;

use Abiesoft\Resource\Console\Option\Coloring;

class MakeController
{
    public static function run(string $string, bool $admin = true)
    {

        $folderAdmin = "Web";
        if($admin){
            $folderAdmin = "Admin";
        }

        if (count(explode("Controller", $string)) > 1) {
            $nama = $string;
        } else {
            $nama = ucfirst($string) . "Controller";
        }

        $dir = __DIR__ . "/../../../../controllers/".$folderAdmin;
        if (!is_dir($dir)) {
            mkdir($dir, 0777, false);
        }
        self::makeSure($dir, $nama, $folderAdmin);
        self::releaseFile($dir, $nama, $folderAdmin);
    }

    protected static function makeSure(string $dir, string $nama, string $folderAdmin): void
    {

        if (file_exists($dir . "/" . $nama . ".php")) {
            echo "\n";
            echo Coloring::withBox('Hati-hati!','merah');
            echo "\n";
            echo "File " . $nama . ".php sudah ada. Ingin menimpanya?";
            echo "\n";
            echo "Ketik [".Coloring::textOnly('Ya','hijau')."] untuk menimpah file";
            echo "\n";
            echo "Tekan [".Coloring::textOnly('Enter','hijau')."] untuk membatalkan";
            echo "\n";
            echo "Pilihan anda : ";
            $formjawab = fopen("php://stdin", "r");
            $jawab = trim(fgets($formjawab));
            if ($jawab == "Ya" || $jawab == "Y" || $jawab == "ya" || $jawab == "y" || $jawab == "Yes" || $jawab == "yes") {
                self::releaseFile($dir, $nama, $folderAdmin);
                die();
            } else {
                echo "\n";
                echo Coloring::withBox('Dibatalkan!','merah');
                echo "\n\n";
                die();
            }
        }
    }

    protected static function releaseFile(string $dir, string $nama, string $folderAdmin): void
    {
        $file = fopen($dir . "/" . $nama . ".php", 'w') or die("Tidak Dapat Membuka File");
        $isi = "<?php \n\n";
        fwrite($file, $isi);
        $isi = "namespace App\Controller\\".$folderAdmin.";\n\n";
        fwrite($file, $isi);
        $isi = "use Abiesoft\Resource\Http\Controller;\n\n";
        fwrite($file, $isi);
        $isi = "final class " . $nama . " extends Controller\n";
        fwrite($file, $isi);
        $isi = "{\n\n";
        fwrite($file, $isi);

        $isi = "    public function index()\n";
        fwrite($file, $isi);
        $isi = "    {\n";
        fwrite($file, $isi);
        $isi = "        return $" . "" . "this->view(\n";
        fwrite($file, $isi);
        $isi = "            model: '".strtolower($folderAdmin)."',\n";
        fwrite($file, $isi);
        $isi = "            template: '" . strtolower(explode("Controller", $nama)[0]) . "/index',\n";
        fwrite($file, $isi);
        $isi = "            data: [\n";
        fwrite($file, $isi);
        $isi = "                'title' => '" . explode("Controller", $nama)[0] . "',\n";
        fwrite($file, $isi);
        $isi = "            ]\n";
        fwrite($file, $isi);
        $isi = "        );\n";
        fwrite($file, $isi);
        $isi = "    }\n\n";
        fwrite($file, $isi);

        $isi = "    public function add()\n";
        fwrite($file, $isi);
        $isi = "    {\n";
        fwrite($file, $isi);
        $isi = "        /*\n\n";
        fwrite($file, $isi);
        $isi = "            Halaman form tambah data\n";
        fwrite($file, $isi);
        $isi = "            method GET\n";
        fwrite($file, $isi);
        $isi = "        */\n";
        fwrite($file, $isi);
        $isi = "    }\n\n";
        fwrite($file, $isi);

        $isi = "    public function edit($" . "" . "params)\n";
        fwrite($file, $isi);
        $isi = "    {\n";
        fwrite($file, $isi);
        $isi = "        /*\n\n";
        fwrite($file, $isi);
        $isi = "            Halaman form edit data\n";
        fwrite($file, $isi);
        $isi = "            method GET\n";
        fwrite($file, $isi);
        $isi = "        */\n";
        fwrite($file, $isi);
        $isi = "    }\n\n";
        fwrite($file, $isi);

        $isi = "    public function read($" . "" . "params)\n";
        fwrite($file, $isi);
        $isi = "    {\n";
        fwrite($file, $isi);
        $isi = "        /*\n\n";
        fwrite($file, $isi);
        $isi = "            Halaman detail data\n";
        fwrite($file, $isi);
        $isi = "            method GET\n";
        fwrite($file, $isi);
        $isi = "        */\n";
        fwrite($file, $isi);
        $isi = "    }\n\n";
        fwrite($file, $isi);

        $isi = "}\n";
        fwrite($file, $isi);
        fclose($file);
        
        echo "\n";
        echo Coloring::withBox('Sukses!','hijau');
        echo "\n";
        echo Coloring::textOnly('Lokasi Controller','biru').": controllers/".$folderAdmin."/" . $nama . ".php";
        echo "\n\n";
    }
}
