<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;

final class FormController extends Controller
{

    public function index($params)
    {
        if(isset($params)){
            return match($params[0]){
                'pengaduan' => $this->pengaduan(),
                'ppid' => $this->ppid(),
                default => Lanjut::ke()
            };
        }else{
            Lanjut::ke();
        }
    }

    public function pengaduan()
    {
        return $this->view(
            model: 'web',
            template: 'form/pengaduan',
            data: [
                'title' => 'Form Pengaduan',
            ]
        );
    }

    public function ppid()
    {
        return $this->view(
            model: 'web',
            template: 'form/ppid',
            data: [
                'title' => 'Form PPID',
            ]
        );
    }

}
