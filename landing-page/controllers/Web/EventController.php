<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;

final class EventController extends Controller
{

    public function index()
    {
        Lanjut::ke('event/kompolnas-award');
    }

    public function read($params)
    {
        return match($params[0]){
            'kompolnas-award' => $this->kompolnasaward(),
            default => Lanjut::ke('event/kompolnas-award')
        };
    }

    protected function kompolnasaward() {
        return $this->view(
            model: 'web',
            template: 'event/kompolnas-award',
            data: [
                'title' => 'Kompolnas Award',
            ]
        );
    }

}
