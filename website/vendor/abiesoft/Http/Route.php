<?php 

namespace Abiesoft\Resource\Http;

use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Http\Lanjut;

class Route extends Authentication{

    private $route = [];

    use Request;
    public function __construct()
    {
        $config = Config::fromYaml('routes');
        foreach($config as $page => $opsi){
            if(is_array($opsi)){
                $path = $opsi['path'];
                $method = explode('|',$opsi['opsi'])[0];
                $controller = explode('|',$opsi['opsi'])[1];
                $function = explode('|',$opsi['opsi'])[2];
                if(strpos($page,"Dashboard") !== FALSE){
                    $this->$method('/'.Config::fromEnv('PREFIX_DASHBOARD').$path, [$controller, $function]);
                }else if(strpos($page,"Api") !== FALSE){
                    $this->$method('/'.Config::fromEnv('PREFIX_API').$path, [$controller, $function]);
                }else{
                    $this->$method($path, [$controller, $function]);
                }
            }else{
                // Jika inin menambahkan Route Default
            }
        }
    }

    protected function get(string $path, string|array $callback)
    {
        $this->route['get'][$path] = $callback;
    }

    protected function post(string $path, string|array $callback)
    {
        $this->route['post'][$path] = $callback;
    }
    
    protected function patch(string $path, string|array $callback)
    {
        $this->route['patch'][$path] = $callback;
    }

    protected function delete(string $path, string|array $callback)
    {
        $this->route['delete'][$path] = $callback;
    }

    public function getListRoutes() {
        $result = [];
        $result['jumlah'] = count($this->route);
        $result['data'] = $this->route;
        return $result;    
    }

    public function current() {

        $method = $this->requestGetMethod();
        $path = $this->requestGetPath()['path'];
        if(count(explode("/",$path)) == 2){
            if(explode("/",$path)[1] == ""){
                $path = "/";
            }
        }else{
            $path = rtrim($path, "/");
        }

        $model = $this->requestGetPath()['model'];
        $params = $this->requestGetPath()['parameter'];

        $id = "";
        if(isset($this->requestGetPath()['id'])){
            $id = $this->requestGetPath()['id'];
        }
        
        

        return match($model){
            'api' => $this->apiRoute($method, $path, $params),
            'dashboard' => $this->dashboardRoute($method, $path, $params, $id),
            default => $this->publicRoute($method, $path, $params)
        };
    }

    protected function publicRoute($method, $path, $params) {

        $callback = $this->route[$method][$path];
        if($path == "/".Config::fromEnv('PREFIX_DASHBOARD')){
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD')."/dashboard");
        }

        if(
            explode("/",$path)[1] == "login"
            OR explode("/",$path)[1] == "reset"
            OR explode("/",$path)[1] == "registrasi"
        ){
            return $this->authRoute($method, $path, $params);
        }

        $c = new Controller;
        if(isset($callback)){
            if(is_array($callback)){
                $file = __DIR__."/../../../controllers/Web/".$callback[0].'.php';
                if(file_exists($file)){
                    $controller = "\App\Controller\Web\\".$callback[0];
                    $ctrl = new $controller;
                    $fc = $callback[1];
                    return $ctrl->$fc($params);
                }else{
                    Lanjut::ke();
                    // return $c->view(
                    //     model: 'admin-error',
                    //     template: '404'
                    // );
                }
            }else{
                die($callback);
            }
        }else{
            $this->notFoundRoute();
        }
    }

    protected function authRoute($method, $path, $params) {

        if($this->isLogin()){
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD'));
        }

        $callback = $this->route[$method][$path];
        $c = new Controller;
        if(isset($callback)){
            if(is_array($callback)){
                $file = __DIR__."/../../../controllers/Auth/".$callback[0].'.php';
                if(file_exists($file)){
                    $controller = "\App\Controller\Auth\\".$callback[0];
                    $ctrl = new $controller;
                    $fc = $callback[1];
                    return $ctrl->$fc($params);
                }else{
                    Lanjut::ke();
                    // return $c->view(
                    //     model: 'admin-error',
                    //     template: '404'
                    // );
                }
            }else{
                die($callback);
            }
        }else{
            Lanjut::ke();
            // return $c->view(
            //     model: 'admin-error',
            //     template: '404'
            // );
        }
    }

    protected function dashboardRoute($method, $path, $params, $id) {

        if(!$this->isLogin()){
            Lanjut::ke('login');
        }

        $callback = $this->route[$method][$path];
        if($path == "/".Config::fromEnv('PREFIX_DASHBOARD')){
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD')."/dashboard");
        }
        $c = new Controller;
        if(isset($callback)){
            if(is_array($callback)){
                $file = __DIR__."/../../../controllers/Admin/".$callback[0].'.php';
                if(file_exists($file)){
                    $controller = "\App\Controller\Admin\\".$callback[0];
                    $ctrl = new $controller;
                    $fc = $callback[1];
                    $params['id'] = $id;
                    return $ctrl->$fc($params);
                }else{

                    Lanjut::ke();
                    // return $c->view(
                    //     model: 'admin-error',
                    //     template: '404'
                    // );
                }
            }else{
                die($callback);
            }
        }else{

            Lanjut::ke();
            // return $c->view(
            //     model: 'admin-error',
            //     template: '404'
            // );
        }
    }

    protected function apiRoute($method, $path, $params) {
        $callback = $this->route[$method][$path];
        $data = [
            'code' => 404,
            'message' => 'NOT FOUND'
        ];
        if(isset($callback)){
            if(is_array($callback)){
                $file = __DIR__."/../../../services/Admin/".$callback[0].'.php';
                if(file_exists($file)){
                    $service = "\App\Service\Admin\\".$callback[0];
                    $s = new $service;
                    $fc = $callback[1];
                    return $s->$fc($params);
                }else{
                    $data = [
                        'code' => 500,
                        'message' => 'INTERNAL SERVER EROR'
                    ];
                    die(json_encode($data));
                }
            }else{
                die(json_encode($data));
            }
        }else{
            $this->notFoundRoute();
        }
    }

    protected function notFoundRoute() {
        Lanjut::ke();
        // die("404 | Not Found");
    }


}