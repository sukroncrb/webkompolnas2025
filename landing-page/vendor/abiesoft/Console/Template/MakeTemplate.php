<?php 

namespace Abiesoft\Resource\Console\Template;

use Abiesoft\Resource\Console\Option\Coloring;

class MakeTemplate {

    public static function run(string $nama)
    {
        $ft = "/";
        $nama = $nama;
        if(count(explode("-",$nama)) == 2) {
            $ft = "/".explode("-",$nama)[0];
            $nama = explode("-",$nama)[1];
        }else{
            die("error");
        }

        $dir = __DIR__ . "/../../../../templates/admin".$ft;
        if (!is_dir($dir)) {
            mkdir($dir, 0777, false);
        }

        self::makeSure($dir, $nama);
        self::releaseFile($dir, $nama);

    }

    protected static function makeSure(string $dir, string $nama): void
    {
        if (file_exists($dir . "/" . $nama . ".latte")) {
            echo "\n";
            echo Coloring::withBox('Hati-hati!','merah');
            echo "\n";
            echo "File " . $nama . ".latte sudah ada. Ingin menimpanya?";
            echo "\n";
            echo "Ketik [".Coloring::textOnly('Ya','hijau')."] untuk menimpah file";
            echo "\n";
            echo "Tekan [".Coloring::textOnly('Enter','hijau')."] untuk membatalkan";
            echo "\n";
            echo "Pilihan anda : ";
            $formjawab = fopen("php://stdin", "r");
            $jawab = trim(fgets($formjawab));
            if ($jawab == "Ya" || $jawab == "Y" || $jawab == "ya" || $jawab == "y" || $jawab == "Yes" || $jawab == "yes") {
                self::releaseFile($dir, $nama);
                die();
            } else {
                echo "\n\e[0m\e[0;101m Dibatalkan! \e[0m\n\n";
                die();
            }
        }
    }

    protected static function releaseFile(string $dir, string $nama): void
    {

        $folder = explode("templates/admin/",$dir)[1];
        $file = fopen($dir . "/" . $nama . ".latte", 'w') or die("Tidak Dapat Membuka File");
        
        $isi = "{layout '../main.latte'}\n";
        fwrite($file, $isi);
        $isi = "{block content}\n";
        fwrite($file, $isi);
        $isi = "<div class='body-wrapper'>\n";
        fwrite($file, $isi);
        $isi = "    <div class='container-fluid'>\n";
        fwrite($file, $isi);
        $isi = "        <div class='card'>\n";
        fwrite($file, $isi);
        $isi = "            <div class='card-body'>\n";
        fwrite($file, $isi);
        $isi = "                <h5 class='card-title fw-semibold mb-4'>".ucfirst(explode('admin/',$dir)[1])."</h5>\n";
        fwrite($file, $isi);
        $isi = "                <p class='mb-0'>Hello ".explode('admin/',$dir)[1]."</p>\n";
        fwrite($file, $isi);
        $isi = "            </div>\n";
        fwrite($file, $isi);
        $isi = "        </div>\n";
        fwrite($file, $isi);
        $isi = "    </div>\n";
        fwrite($file, $isi);
        $isi = "</div>\n";
        fwrite($file, $isi);
        $isi = "{/block}";
        fwrite($file, $isi);
        
        fclose($file);

        echo "\n";
        echo Coloring::withBox('Sukses!','hijau');
        echo "\n";
        echo Coloring::textOnly('Lokasi Schema','biru').": templates/admin/" . $folder."/".$nama . ".latte";
        echo "\n\n";
        
    }


}