<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Utilities\Generate;
use App\Service\Service;

final class CsrfService extends Service
{
    public function index(){
        $this->authentication('get');
        $csrf = Generate::csrf();
        return $this->success(['csrf'=>$csrf]);
    }
}