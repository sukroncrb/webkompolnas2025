<?php

namespace Abiesoft\Resource\Utilities;

use Symfony\Component\Yaml\Yaml;

class Config {

    public static function fromEnv(string $key) :string{
        $dir = __DIR__.'/../../../';
        return parse_ini_file($dir.'.env')[$key];
    }

    public static function fromYaml(string $nama) :array{
        $dir = __DIR__.'/../../../config/';
        return Yaml::parseFile($dir.$nama.'.yaml');
    }

    public static function Baseurl() :string{
        $http =  (self::fromEnv('SSL')) ? 'https://' : 'http://';
        $url = "";
        (filter_var(self::fromEnv('DOMAIN_IP'), FILTER_VALIDATE_IP)) ?
        $url = $http.self::fromEnv('DOMAIN_IP').":".self::fromEnv('PORT')."/"
        : $url = $http.self::fromEnv('DOMAIN_IP')."/";
        return $url;
    }

}