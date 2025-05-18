<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;

final class DashboardController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'dashboard/index',
            data: [
                'title' => 'Dashboard',
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
