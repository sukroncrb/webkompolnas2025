<?php

namespace Abiesoft\Resource\Utilities;

class Guard {
    public static function csrf($csrf) {
        $result = false;
        $scf = "";
        $referer = $_SERVER['HTTP_REFERER'];
        (Cookies::ada('_scf')) ? $scf = Reader::secretCode(Cookies::lihat('_scf'), Config::fromEnv('SECRET_KEY'))[$referer] : $scrf = "";
        ($csrf == $scf) ? $result = true : $result = false;
        return true;
    }

}