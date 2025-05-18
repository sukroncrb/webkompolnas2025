<?php 

namespace App\Service\Admin;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Package\YoutubeApiService;
use App\Service\Service;
final class YoutubeService extends Service
{

    public function load($param)
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->authentication($method);
        return match ($method) {
            'get' => $this->get(),
            default => $this->post()
        };
    }

    protected function get() {
        return YoutubeApiService::videoTerbaru();
    }

}