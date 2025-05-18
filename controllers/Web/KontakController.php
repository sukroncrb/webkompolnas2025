<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;

final class KontakController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'web',
            template: 'kontak/index',
            data: [
                'title' => 'Hubungi Kami',
            ]
        );
    }

}
