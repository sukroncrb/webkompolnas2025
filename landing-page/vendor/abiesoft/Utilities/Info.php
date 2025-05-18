<?php

namespace Abiesoft\Resource\Utilities;

class Info {

    public static function device(): array
    {
        $result = [];
        $device = "";
        $os = "Chrome Os";
        $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
        $isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet"));

        $isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows"));
        $isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android"));
        $isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone"));
        $isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad"));
        $isIOS = $isIPhone || $isIPad;

        if ($isMob) {
            if ($isTab) {
                $device = "Tablet";
            } else {
                $device = "Mobile";
            }
        } else {
            $device = "Komputer/ Laptop";
        }

        if ($isIOS) {
            $os = 'iOS';
        } elseif ($isAndroid) {
            $os = 'Android';
        } elseif ($isWin) {
            $os = 'Windows';
        }

        $result = [
            'device' => $device,
            'os' => $os,
            'ip' => Reader::ip()
        ];

        return $result;
    }

}