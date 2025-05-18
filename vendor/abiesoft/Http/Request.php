<?php 

namespace Abiesoft\Resource\Http;

use Abiesoft\Resource\Utilities\Config;

trait Request {

    protected function requestGetMethod() {
        $result = $_SERVER['REQUEST_METHOD'];
        return strtolower($result);
    }

    protected function requestGetPath() {
        $uri = $_SERVER['REQUEST_URI'];
        $page = explode('/',$uri)[1];
        return match($page) {
            Config::fromEnv('PREFIX_API') => $this->requestGetPathWithPrefixApi($uri),
            Config::fromEnv('PREFIX_DASHBOARD') => $this->requestGetPathWithPrefixDashboard($uri),
            default => $this->requestGetPathWithoutPrefix($uri)
        };
    }

    protected function requestGetPathWithPrefixApi($uri):array {
        $result = [];
        $objParams = count(explode('?',$uri));
        if($objParams == 2){
            $page = explode('?',$uri)[0];
            $path = $page.'/:params';
            $parameter = [];
            foreach(explode('&',$_SERVER['QUERY_STRING']) as $a){
                $parameter[explode('=',$a)[0]] = explode('=',$a)[1]; 
            }
            $parameter = $parameter;
            $result = [
                'path' => str_replace('//','/',$path),
                'parameter' => $parameter,
                'model' => 'api'
            ];
            return $result;
        }else{
            $prefix = explode('/',$uri)[1]; 
            $page = explode('/',$uri)[2];
            $parameter = explode('/',$uri);
            unset($parameter[0]);
            unset($parameter[1]);
            unset($parameter[2]);
            $parameter = $parameter;
            if(count(explode('/',$uri)) > 3){
                $path = '/'.$prefix.'/'.$page.'/:params';
            }else{
                $path = '/'.$uri;
            }
            $parameter = $parameter;
            $result = [
                'path' => str_replace('//','/',$path),
                'parameter' => array_values($parameter),
                'model' => 'api'
            ];
        }
        return $result;
    }

    protected function requestGetPathWithPrefixDashboard($uri):array {
        $result = [];
        $objParams = count(explode('?',$uri));
        if($objParams == 2){
            $page = explode('?',$uri)[0];
            $path = $page.'/:params';
            $parameter = [];
            foreach(explode('&',$_SERVER['QUERY_STRING']) as $a){
                $parameter[explode('=',$a)[0]] = explode('=',$a)[1]; 
            }
            $parameter = $parameter;
            $result = [
                'path' => str_replace('//','/',$path),
                'parameter' => $parameter,
                'model' => 'dashboard'
            ];
            return $result;
        }else{
            $prefix = explode('/',$uri)[1]; 
            $page = explode('/',$uri)[2];
            $parameter = explode('/',$uri);
            unset($parameter[0]);
            unset($parameter[1]);
            unset($parameter[2]);
            $parameter = $parameter;
            if(count($parameter) >= 2){
                $id = $parameter[3];
                $model = $parameter[4];
                if($model == "edit" || $model =="read"){
                    $params = "";
                    if(count($parameter) > 2){
                        $params = "/:params";
                    }
                    $path = '/'.$prefix.'/'.$page.'/:id/'.$model.$params;
                    unset($parameter[3]);
                    unset($parameter[4]);
                    $id = $id;
                    $parameter = $parameter;
                    $result = [
                        'path' => str_replace('//','/',$path),
                        'id' => $id,
                        'parameter' => array_values($parameter),
                        'model' => 'dashboard'
                    ];
                }else{
                    $path = '/'.$prefix.'/'.$page.'/:params';
                    $parameter = $parameter;
                    $result = [
                        'path' => str_replace('//','/',$path),
                        'parameter' => array_values($parameter),
                        'model' => 'dashboard'
                    ];
                }
            }else{
                if(count(explode('/',$uri)) > 4){
                    $path = '/'.$prefix.'/'.$page.'/:params';
                }else{
                    $path = '/'.$uri;
                } 
                $parameter = $parameter;
                $result = [
                    'path' => str_replace('//','/',$path),
                    'parameter' => array_values($parameter),
                    'model' => 'dashboard'
                ];
            }
        }

        return $result;
    }

    protected function requestGetPathWithoutPrefix($uri):array {
        $result = [];
        $objParams = count(explode('?',$uri));
        if($objParams == 2){
            $page = explode('?',$uri)[0];
            $path = $page.'/:params';
            $parameter = [];
            foreach(explode('&',$_SERVER['QUERY_STRING']) as $a){
                $parameter[explode('=',$a)[0]] = explode('=',$a)[1]; 
            }
            $parameter = $parameter;
            $result = [
                'path' => str_replace('//','/',$path),
                'parameter' => $parameter,
                'model' => 'public'
            ];
            return $result;
        }else{
            $page = explode('/',$uri)[1];
            $parameter = explode('/',$uri);
            unset($parameter[0]);
            unset($parameter[1]);
            $parameter = $parameter;
            if(count(explode('/',$uri)) > 2){
                $uri = '/'.explode('/',$uri)[1];
                $path = '/'.$uri.'/:params';
            }else{
                $path = '/'.$uri;
            }
            $result = [
                'path' => str_replace('//','/',$path),
                'parameter' => array_values($parameter),
                'model' => 'public'
            ];
            return $result;
        }
        return $result;
    }

}