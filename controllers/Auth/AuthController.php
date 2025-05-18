<?php 

namespace App\Controller\Auth;

use Abiesoft\Resource\Http\Controller;

final class AuthController extends Controller
{

    public function index()
    {
        $path = $_SERVER['REQUEST_URI'];
        return match(explode("/",$path)[1]){
            'login' => $this->login(),
            default => $this->login()
        };
    }

    public function login()
    {
        return $this->view(
            model: 'auth',
            template: 'page/login',
            data: [
                'title' => 'Login',
            ]
        );
    }

}
