<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Utilities\Config;

final class VideoController extends Controller
{

    public function index()
    {
        Lanjut::ke(Config::fromEnv("PREFIX_DASHBOARD")."/seting");
        // return $this->view(
        //     model: 'admin',
        //     template: 'video/index',
        //     data: [
        //         'title' => 'Video',
        //     ]
        // );
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
