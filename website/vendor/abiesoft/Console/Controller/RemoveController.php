<?php

namespace Abiesoft\Resource\Console\Controller;

use Abiesoft\Resource\Console\Option\Coloring;

class RemoveController
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
        self::makeSure($dir, $nama, $folderAdmin);
    }

    protected static function makeSure(string $dir, string $nama, string $folderAdmin): void
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
                echo Coloring::textOnly('Lokasi Controller:','biru'); 
                echo "\e[9mcontrollers/".$folderAdmin."/" . $nama . ".php";
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