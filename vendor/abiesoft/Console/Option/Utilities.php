<?php 

namespace Abiesoft\Resource\Console\Option;

use Abiesoft\Resource\Http\Route;
use Abiesoft\Resource\Utilities\Config;

trait Utilities {

    public function start () {
        $dir = __DIR__."/../../../../".Config::fromEnv('PUBLIC_FOLDER');
        chdir($dir);
        $domain = Config::fromEnv('DOMAIN_IP');
        $port = Config::fromEnv('PORT');
        $ping = null;
        $output = null;
        
        if(PHP_OS == "WINNT") {
            $command = 'ping '.$domain;
        }else{
            $command = 'ping -c 4 '.$domain;
        }
        
        exec($command, $output, $ping);
        if($ping == 0){
            $result = null;
            $output = null;
            echo "\n\n\n".Coloring::withBox('Server Running', 'hijau')."\n";
            echo Coloring::textOnly('Berjalan di:', 'biru')." http://" . $domain . ":" . $port."\n";
            echo Coloring::textOnly('Catatan:', 'biru')." Untuk mematikan server ctrl+C atau close terminal\n\n\n\n";
            exec("php -S " . $domain . ":" . $port, $output, $result);
        }else{
            echo "\n".Coloring::withBox('Domain Error!','merah')."\n";
            echo Coloring::textOnly('Pesan:', 'merah')." Domain/IP : ".$domain." tidak bisa berjalan di jaringan ini.\n";
            echo Coloring::textOnly('Saran:', 'hijau')." Cek setingan DOMAIN_IP pada file .env atau gunakan localhost 127.0.0.1\n\n";
            die();
        }
    }

    protected function infoRoute(){
        $router = new Route();
        $jumlahRoute = $router->getListRoutes()['jumlah'];
        $listRoute = $router->getListRoutes()['data'];
        echo "\n\n".Coloring::withBox('Daftar Route','hijau')."\n\n";
        $tabel = "%-5.5s %-100.100s  %7.7s \n";
        printf($tabel, 'No', 'Route', 'Method');
        $no = 1;
        if($jumlahRoute > 0){
            foreach ($listRoute as $k => $v) {
                foreach ($v as $kv => $vv) {
                    printf($tabel, $no . ". ", $kv . "  --------------------------------------------------------------------------------------------------------------------------", strtoupper($k));
                    $no++;
                }
            }
        }else{
            echo "Belum ada route \n";
        }
        echo "\n\n";
    }

    protected function infoBaseurl(){
        echo "\n";
        echo Coloring::textOnly('Baseurl: ', 'biru');
        echo Config::Baseurl();
        echo "\n\n";
    }

    public function help() {
        echo "\n\n".Coloring::withBox('Help!', 'hijau')."\n\n";
        echo Coloring::textOnly('Aplikasi', 'biru')."\n";
        echo "   start\n";
        echo "   info:route\n";
        echo Coloring::textOnly('Schema', 'biru')."\n";
        echo "   make:schema [nama]\n";
        echo "   remove:schema [nama]\n";
        echo Coloring::textOnly('Controller', 'biru')."\n";
        echo "   make:controller [NamaController]\n";
        echo "   make:controller [NamaController] -w\n";
        echo "   remove:controller [NamaController]\n";
        echo "   remove:controller [NamaController] -w\n";
        echo Coloring::textOnly('Database', 'biru')."\n";
        echo "   db:import\n";
        echo "   db:backup\n";
        echo "   db:refresh\n";
        echo "   db:restore\n";
        echo "\n\n";
    }

}