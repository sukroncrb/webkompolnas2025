<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Utilities\Config;

final class FormController extends Controller
{

    public function index($params)
    {

        if(isset($params[0])){
            if($params[0] == "data"){
                return match($params[1]){
                    'pengaduan' => $this->tabelpengaduan(),
                    'ppid' => $this->tabelppid(),
                    default => Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD'))
                };
            }else{
                Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD'));
            }
        }else{
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD'));
        }

    }

    public function tabelpengaduan()
    {
        return $this->view(
            model: 'admin',
            template: 'form/pengaduan',
            data: [
                'title' => 'Form',
            ]
        );
    }

    public function tabelppid()
    {
        return $this->view(
            model: 'admin',
            template: 'form/ppid',
            data: [
                'title' => 'Form',
            ]
        );
    }

    public function add()
    {
        /*

            Halaman form tambah data
            method GET
        */
    }

    public function edit($params)
    {
        /*

            Halaman form edit data
            method GET
        */
    }

    public function read($params)
    {
        /*

            Halaman detail data
            method GET
        */
    }

}
