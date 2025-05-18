<?php 

namespace Abiesoft\Resource\Package;

use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Reader;
use Abiesoft\Resource\Mysql\DB;

class YoutubeApiService {

    public static function videoTerbaru() { 

        $kodeyoutube = DB::terhubung()->query("SELECT kode FROM seting WHERE tipe = ? ", ['YOUTUBE_SERVICE'])->teks();
        $channelID = Reader::secretCode($kodeyoutube, Config::fromEnv('SECRET_KEY'))['channelid'];
        $key = Reader::secretCode($kodeyoutube, Config::fromEnv('SECRET_KEY'))['apikeyyoutube'];
        $maxResult = 50;
        
        $url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId='.$channelID.'&maxResults='.$maxResult.'&order=date&type=video&key='.$key;
        
        $data = file_get_contents($url); 
        echo $data;

    } 

}