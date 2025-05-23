<?php 

namespace App\Service;

use Abiesoft\Resource\Http\Authentication;
use Abiesoft\Resource\Utilities\Config;

class Service extends Authentication
{
    protected function authentication(string $method)
    {
        $reqMethod = strtolower($_SERVER['REQUEST_METHOD']);

        if ($reqMethod != $method) {
            return $this->badrequest();
        }

        $apikey = "";

        if (isset($_SERVER['HTTP_X_API_KEY'])) {
            $apikey = $_SERVER['HTTP_X_API_KEY'];
        } else {
            return $this->unauthorized();
        }

        $tipe = "";

        if (isset($_SERVER['HTTP_TIPE'])) {
            $tipe = $_SERVER['HTTP_TIPE'];
        }
        
        if($tipe != ""){
            $keysafe = Config::fromEnv("PUBLIC_APIKEY");
        }else{
            $keysafe = Config::fromEnv("APIKEY");
        }

        if ($apikey == $keysafe) {
            return;
        }


        
        
        return $this->forbidden();
    }

    protected function badrequest($info = "")
    {
        $data = [];
        $data['code'] = 400;
        if($info != ""){
            $data['info'] = $info;
        }
        $data['message'] = "BAD REQUEST";
        die(json_encode($data));
    }

    protected function unauthorized()
    {
        $data = [];
        $data['code'] = 401;
        $data['message'] = "UNAUTHORIZED";
        die(json_encode($data));
    }

    protected function forbidden()
    {
        $data = [];
        $data['code'] = 403;
        $data['message'] = "FORBIDDEN";
        die(json_encode($data));
    }

    protected function success($result = [])
    {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "OK";
        $data['data'] = $result;
        die(json_encode($data));
    }

}