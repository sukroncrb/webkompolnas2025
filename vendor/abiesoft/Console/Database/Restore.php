<?php 

namespace Abiesoft\Resource\Console\Database;

use Abiesoft\Resource\Console\Option\Coloring;
use Abiesoft\Resource\Mysql\DB;

class Restore {

    public static function run()
    {
        $dir = __DIR__ . "/../../../../backup";
        if (file_exists($dir)) {
            echo "\nSilahkan pilih data yang akan direstore?\n";
            if (count(scandir($dir)) > 2) {
                $no = -1;
                foreach (scandir($dir) as $d) {
                    if ($d != "." and $d != "..") {
                        echo "[".Coloring::textOnly($no,'hijau')."] ".$d."\n";
                    }
                    $no++;
                }
                echo "Tekan [".Coloring::textOnly('Enter','hijau')."] untuk membatalkan\n";
                echo "Angka pilihan anda : ";
                $formjawab = fopen("php://stdin", "r");
                $jawab = trim(fgets($formjawab));
                if (is_numeric($jawab)) {
                    return self::pilihan($jawab);
                } else {
                    echo "\n".Coloring::withBox('Dibatalkan!', 'merah')."\n\n";
                    die();
                }
            } else {
                echo "\n".Coloring::withBox('Belum ada data yang dibackup!', 'merah')."\n\n";
                die();
            }
        } else {
            echo "\n".Coloring::withBox('Belum ada data yang dibackup!', 'merah')."\n\n";
            die();
        }
    }

    public static function pilihan($angka)
    {
        $dir = __DIR__ . "/../../../../backup";
        $no = -1;
        foreach (scandir($dir) as $d) {
            if ($d != "." and $d != "..") {
                if ($no == $angka) {
                    self::restoreData($d);
                }
            }
            $no++;
        }
    }

    public static function restoreData($folder)
    {
        $isifolder = __DIR__ . "/../../../../backup/" . $folder;
        $no = 3;
        echo "\n";
        foreach (scandir($isifolder) as $i => $v) {
            if ($v != "." and $v != "..") {
                $tabel = explode(".", $v)[0];
                $hpstabel = DB::terhubung()->query("DROP TABLE " . $tabel . " ");
                if ($hpstabel) {
                    include_once $isifolder . "/" . $v;
                    echo "-- Tabel ".Coloring::textOnly($tabel,'hijau')." sudah direstore. \n";
                }
                if ($no == count(scandir($isifolder))) {
                    $total = count(scandir($isifolder)) - 2;
                    echo "\n\e".Coloring::withBox('Sukses!','hijau')."\n ".Coloring::textOnly('Total: ','biru') . $total . " tabel dipulihkan\n\n";
                }
                $no++;
            }
        }
    }

}