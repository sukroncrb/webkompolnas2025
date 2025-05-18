<?php 

namespace Abiesoft\Resource\Console\Template;

use Abiesoft\Resource\Console\Option\Coloring;

class RemoveTemplate {

    public static function run(string $nama)
    {
        $dir = __DIR__ . "/../../../../schema";
        self::makeSure($dir, $nama);
    }

    protected static function makeSure(string $dir, string $nama): void
    {
        if (file_exists($dir . "/" . $nama . ".php")) {
            echo "\n";
            echo Coloring::withBox('Hati-hati!', 'merah');
            echo "\n";
            echo "Yakin ingin menghapus file " . $nama . ".php?";
            echo "\n";
            echo "Ketik [".Coloring::textOnly('Ya','hijau')."] untuk menghapus file";
            echo "\n";
            echo "Tekan [".Coloring::textOnly('Enter','hijau')."] untuk membatalkan";
            echo "\n";
            echo "Pilihan anda : ";
            $formjawab = fopen("php://stdin", "r");
            $jawab = trim(fgets($formjawab));
            if ($jawab == "Ya" || $jawab == "Y" || $jawab == "ya" || $jawab == "y" || $jawab == "Yes" || $jawab == "yes") {
                unlink($dir . "/" . $nama . ".php");
                echo "\n";
                echo Coloring::withBox('Dihapus!', 'hijau');
                echo "\n";
                echo Coloring::textOnly('Lokasi Schema:','biru'); 
                echo "\e[9mschema" . $nama . ".php";
                echo "\n\n";
            } else {
                echo "\n";
                echo Coloring::withBox('Dibatalkan!', 'merah');
                echo "\n\n";
                die();
            }
        } else {
            echo "\n";
            echo "File ".Coloring::textOnly($nama.".php", 'merah')." Tidak ditemukan!";
            echo "\n\n";
            die();
        }
    }

}