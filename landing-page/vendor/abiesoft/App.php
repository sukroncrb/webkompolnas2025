<?php

namespace Abiesoft\Resource;

use Abiesoft\Resource\Http\Route;

class App {

    public function start(){
        $route = new Route;
        return $route->current();
    }

}