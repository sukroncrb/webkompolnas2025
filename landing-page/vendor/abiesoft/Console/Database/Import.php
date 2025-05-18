<?php 

namespace Abiesoft\Resource\Console\Database;

use Abiesoft\Resource\Console\Option\Coloring;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;

class Import {

    public static function run()
    {
        $dir = __DIR__ . "/../../../../schema";
        self::makeSure($dir);
    }

    protected static function makeSure(string $dir): void
    {
        if (Config::fromEnv('MODE') === 'running') {
            
            echo "\n";
            echo Coloring::withBox('Hati-hati!','merah');
            echo "\n";
            echo "Aplikasi ini sudah running secara online. Tetap lanjutkan?";
            echo "\n";
            echo "Ketik [".Coloring::textOnly('Ya','hijau')."] untuk melanjutkan import";
            echo "\n";
            echo "Tekan [".Coloring::textOnly('Enter','hijau')."] untuk membatalkan";
            echo "\n";
            echo "Pilihan anda : ";

            $formjawab = fopen("php://stdin", "r");
            $jawab = trim(fgets($formjawab));
            if ($jawab == "Ya" || $jawab == "Y" || $jawab == "ya" || $jawab == "y" || $jawab == "Yes" || $jawab == "yes") {
                echo "\n";
                self::proses($dir);
                die();
            } else {
                echo "\n\e[0m\e[0;101m Dibatalkan! \e[0m\n\n";
                die();
            }
        } else {
            echo "\n";
            self::proses($dir);
            die();
        }
    }

    protected static function proses(string $dir): void
    {
        $statusimport = "";
        $total = 0;
        $cektabelmigrasi = DB::terhubung()->query("SELECT * FROM information_schema.tables WHERE table_schema = ? AND table_name = ?", [Config::fromEnv('DB_NAME'), 'migrasi']);

        if ($cektabelmigrasi->hitung()) {
            foreach (scandir("./schema") as $fs => $file) {
                if ($fs != 0 and $fs != 1 and $file != "migrasi.php") {
                    $cekmigrasi = DB::terhubung()->query("SELECT * FROM migrasi WHERE tabel = ? ", [explode('.', $file)[0]]);
                    if (!$cekmigrasi->hitung()) {
                        include "./schema/" . $file;
                        DB::terhubung()->input("migrasi", array(
                            "tabel" => explode('.', $file)[0]
                        ));
                        $total++;
                        if ($fs == count(scandir("./schema")) - 1) {
                            echo "-- Tabel ".Coloring::textOnly(explode('.', $file)[0], 'hijau')." sudah diimport. \n";
                            $statusimport = "\n".Coloring::withBox('Sukses!', 'hijau')."\n".Coloring::textOnly('Total:','biru'). " ". $total . " tabel \n\n";
                        } else {
                            echo "-- Tabel ".Coloring::textOnly(explode('.', $file)[0], 'hijau')." sudah diimport. \n";
                        }
                    } else {
                        if ($total === 0) {
                            $statusimport = "\n".Coloring::withBox('Tidak Ada Tabel Yang Diimport!','hijau')."\n\n\n";
                        } else {
                            $statusimport = "\n".Coloring::withBox('Sukses!', 'hijau')."\n".Coloring::textOnly('Total:','biru'). " ". $total . " tabel \n\n";
                        }
                    }
                }
            }
            echo $statusimport;
        } else {
            include_once __DIR__ . "/../Schema/migrasi.php";
            self::proses($dir);
        }
    }

}