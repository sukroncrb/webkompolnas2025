<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Reader;

final class SetingController extends Controller
{

    public function index()
    {
        $dataemailservice = DB::terhubung()->query("SELECT kode FROM seting WHERE tipe = ? ", ['EMAIL_SERVICE'])->teks();
        $datayoutubeservice = DB::terhubung()->query("SELECT kode FROM seting WHERE tipe = ? ", ['YOUTUBE_SERVICE'])->teks();
        return $this->view(
            model: 'admin',
            template: 'seting/index',
            data: [
                'title' => 'Seting',
                'smtp' => Reader::secretCode($dataemailservice, Config::fromEnv('SECRET_KEY'))['smtp'],
                'port' => Reader::secretCode($dataemailservice, Config::fromEnv('SECRET_KEY'))['port'],
                'useremail' => Reader::secretCode($dataemailservice, Config::fromEnv('SECRET_KEY'))['useremail'],
                'emailpsw' => Reader::secretCode($dataemailservice, Config::fromEnv('SECRET_KEY'))['emailpsw'],
                'emailpengirim' => Reader::secretCode($dataemailservice, Config::fromEnv('SECRET_KEY'))['emailpengirim'],
                'namapengirim' => Reader::secretCode($dataemailservice, Config::fromEnv('SECRET_KEY'))['namapengirim'],
                'apikeyyoutube' => Reader::secretCode($datayoutubeservice, Config::fromEnv('SECRET_KEY'))['apikeyyoutube'],
                'channelid' => Reader::secretCode($datayoutubeservice, Config::fromEnv('SECRET_KEY'))['channelid'],
                'mailserviceid' => DB::terhubung()->query("SELECT id FROM seting WHERE tipe = ? ", ['EMAIL_SERVICE'])->teks(),
                'youtubeserviceid' => DB::terhubung()->query("SELECT id FROM seting WHERE tipe = ? ", ['YOUTUBE_SERVICE'])->teks(),
            ]
        );
    }

    public function add()
    {
        /*

            Halaman form tambah data
            method GET
        */
    }

    public function edit($params)
    {
        /*

            Halaman form edit data
            method GET
        */
    }

    public function read($params)
    {
        /*

            Halaman detail data
            method GET
        */
    }

}
