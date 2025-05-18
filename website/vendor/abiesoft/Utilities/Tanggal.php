<?php 

namespace Abiesoft\Resource\Utilities;

use DateTime;

class Tanggal {

    protected static function dt(string $datetime): string
    {
        $result = date("Y-m-d H:i:s");
        if ($datetime != "") {
            $result = $datetime;
        }
        return $result;
    }

    public static function bulanToString($bulan)
    {
        return match ($bulan) {
            "01" => "Januari",
            "02" => "Februari",
            "03" => "Maret",
            "04" => "April",
            "05" => "Mei",
            "06" => "Juni",
            "07" => "Juli",
            "08" => "Agustus",
            "09" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "Desember",
            default => ""
        };
    }

    protected static function toBulanString(string $bulan)
    {
        return match ($bulan) {
            "1" => "Januari",
            "2" => "Februari",
            "3" => "Maret",
            "4" => "April",
            "5" => "Mei",
            "6" => "Juni",
            "7" => "Juli",
            "8" => "Agustus",
            "9" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "Desember",
            default => ""
        };
    }

    public static function full(string $datetime = ""): string
    {
        $result = "";
        ($datetime == "") ? $datetime = date('Y-m-d H:i:s') : $datetime;
        $tanggal = ltrim(substr(self::dt($datetime), 8, 2), "0");
        $bulan = ltrim(substr(self::dt($datetime), 5, 2), "0");
        $tahun = substr(self::dt($datetime), 0, 4);
        $result = $tanggal . " " . self::toBulanString($bulan) . " " . $tahun;
        return $result;
    }

    public static function fullDanNamaHari(string $datetime = "", $full = true): string
    {
        $result = "";
        ($datetime == "") ? $datetime = date('Y-m-d H:i:s') : $datetime;
        $tanggal = ltrim(substr(self::dt($datetime), 8, 2), "0");
        $bulan = ltrim(substr(self::dt($datetime), 5, 2), "0");
        $tahun = substr(self::dt($datetime), 0, 4);
        $time = explode(" ", $datetime)[1];

        $dateString = $datetime;
        $date = new DateTime($dateString);

        $dayNames = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        $dayNameEnglish = $date->format('l');
        $namahari = $dayNames[$dayNameEnglish];

        // $waktu = substr($time, 0, 5);
        $waktu = "08.00";

        if($full){
            $result = $namahari .', '. $tanggal . " " . self::toBulanString($bulan) . " " . $tahun;
        }else{
            $result = $namahari .', '. $tanggal . " " . substr(self::toBulanString($bulan), 0, 3) . " " . $tahun;
        }

        return $result;
    }

    public static function simpel(string $datetime = ""): string
    {
        $result = "";
        ($datetime == "") ? $datetime = date('Y-m-d H:i:s') : $datetime;
        $tanggal = ltrim(substr(self::dt($datetime), 8, 2), "0");
        $bulan = ltrim(substr(self::dt($datetime), 5, 2), "0");
        $tahun = substr(self::dt($datetime), 0, 4);
        $result = $tanggal . " " . substr(self::toBulanString($bulan), 0, 3) . " " . $tahun;
        return $result;
    }

    public static function simpelAndTime(string $datetime = ""): string
    {
        $result = "";
        ($datetime == "") ? $datetime = date('Y-m-d H:i:s') : $datetime;
        $tanggal = ltrim(substr(self::dt($datetime), 8, 2), "0");
        $bulan = ltrim(substr(self::dt($datetime), 5, 2), "0");
        $tahun = substr(self::dt($datetime), 0, 4);
        $time = explode(" ", $datetime)[1];
        $result = $tanggal . " " . substr(self::toBulanString($bulan), 0, 3) . " " . $tahun . " " . substr($time, 0, 5) . " WIB";
        return $result;
    }
}