<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Guard;
use Abiesoft\Resource\Utilities\Input;
use App\Model\Info;
use App\Service\Service;
final class InfoService extends Service
{

    public function load($param)
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->authentication($method);
        return match ($method) {
            'get' => $this->get($param),
            default => $this->post()
        };
    }

    protected function get($param) {
        //
    }

    protected function post() {
        $csrf = Input::get('__csrf');
        if(!Guard::csrf($csrf)){
            return $this->badrequest("Token Expire");
        }

        $tipe = Input::get('tipe');
        return match($tipe) {
            default => $this->update()
        }; 
    }

    protected function update() {
        if(Info::replace()['status'] == "OK"){
            $this->success();
        }else{
            $this->badrequest(Info::replace()['status']);
        }
    }

    

}