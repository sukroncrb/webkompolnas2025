<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;

final class GrupController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'grup/index',
            data: [
                'title' => 'Grup',
            ]
        );
    }

    public function add()
    {
        return $this->view(
            model: 'admin',
            template: 'grup/add',
            data: [
                'title' => 'Grup',
            ]
        );
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
