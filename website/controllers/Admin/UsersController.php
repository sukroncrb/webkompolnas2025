<?php 

namespace App\Controller\Admin;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Http\Lanjut;
use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Config;

final class UsersController extends Controller
{

    public function index()
    {
        return $this->view(
            model: 'admin',
            template: 'users/index',
            data: [
                'title' => 'Users',
            ]
        );
    }

    public function add()
    {
        return $this->view(
            model: 'admin',
            template: 'users/add',
            data: [
                'title' => 'Tambah user',
                'grup' => DB::terhubung()->query("SELECT id, nama FROM grup ORDER BY id DESC")->hasil()
            ]
        );
    }

    public function edit($params)
    {
        $id = $params['id'];
        if(DB::terhubung()->query("SELECT id FROM users WHERE id = ? ", [$id])->hitung() == 0){
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD').'/users');
            die();
        }

        return $this->view(
            model: 'admin',
            template: 'users/edit',
            data: [
                'title' => 'Edit user',
                'id' => $id,
                'nama' => DB::terhubung()->query("SELECT nama FROM users WHERE id = ? ", [$id])->teks(),
                'email' => DB::terhubung()->query("SELECT email FROM users WHERE id = ? ", [$id])->teks(),
                'nohp' => DB::terhubung()->query("SELECT nohp FROM users WHERE id = ? ", [$id])->teks(),
                'idgrup' => DB::terhubung()->query("SELECT grupid FROM users WHERE id = ? ", [$id])->teks(),
                'namagrup' => DB::terhubung()->query("SELECT nama FROM grup WHERE id = ? ", [DB::terhubung()->query("SELECT grupid FROM users WHERE id = ? ", [$id])->teks()])->teks(),
                'grup' => DB::terhubung()->query("SELECT id, nama FROM grup ORDER BY id DESC")->hasil()
            ]
        );
    }

    public function read($params)
    {

        $uid = "";
        $page = "";

        if(count($params) != 0){
            $uid = $params['uid'];
            $page = $params['p'];
        }else{
            $uid = "";
            $page = "read";
        }

        if($uid != "" && $page != ""){
            if($uid != $this->getID()){
                Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD')."/profile/detail/?uid=".$this->getID()."&p=info");
            }else{
                return match($page){
                    'info' => $this->info($params),
                    default => Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD')."/profile/detail/?uid=".$uid."&p=info")
                };
            }
        }else{
            Lanjut::ke(Config::fromEnv('PREFIX_DASHBOARD'));
        }
        
    }

    public function info($params)
    {
        return $this->view(
            model: 'admin',
            template: 'users/info',
            data: [
                'title' => 'Users',
            ]
        );
    }

}
