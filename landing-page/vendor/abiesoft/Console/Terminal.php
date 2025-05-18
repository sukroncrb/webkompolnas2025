<?php 

namespace Abiesoft\Resource\Console;

use Abiesoft\Resource\Console\Controller\MakeController;
use Abiesoft\Resource\Console\Controller\RemoveController;
use Abiesoft\Resource\Console\Database\Backup;
use Abiesoft\Resource\Console\Database\Import;
use Abiesoft\Resource\Console\Database\Refresh;
use Abiesoft\Resource\Console\Database\Restore;
use Abiesoft\Resource\Console\Option\Utilities;
use Abiesoft\Resource\Console\Schema\MakeSchema;
use Abiesoft\Resource\Console\Schema\RemoveSchema;
use Abiesoft\Resource\Console\Template\MakeTemplate;
use Abiesoft\Resource\Console\Template\RemoveTemplate;

class Terminal {

    use Utilities;
    public function __construct($command)
    {
        unset($command[0]);
        if(count($command) ==  1){
            $model = (count(explode(':',$command[1]))>1) ? explode(':',$command[1])[0] : $command[1];
            return match($model) {
                'start' => $this->start(),
                'info' => $this->info(explode(':',$command[1])[1]),
                'db' => $this->db(explode(':',$command[1])[1]),
                default => $this->help()
            };
        }else if(count($command) == 2){
            $do = explode(":", $command[1])[0];
            $function = explode(":", $command[1])[1];
            unset($command[1]);
            return match($do){
                'make' => $this->maker($function, $command[2]),
                'remove' => $this->remover($function, $command[2]),
                default => $this->help()
            };
        }else if(count($command) == 3){
            $do = explode(":", $command[1])[0];
            $function = explode(":", $command[1])[1];
            unset($command[1]);
            if($command[3] == "-w"){
                return match($do){
                    'make' => $this->maker($function, $command[2], false),
                    'remove' => $this->remover($function, $command[2], false),
                    default => $this->help()
                };
            }else{
                return $this->help();
            }
        }else{
            return $this->help();
        }
    }

    protected function maker($function, $nama, $admin = true) {
        return match($function){
            'controller' => MakeController::run($nama,$admin),
            'schema' => MakeSchema::run($nama),
            'template' => MakeTemplate::run($nama),
            default => $this->help()
        };
    }

    protected function remover($function, $nama, $admin = true) {
        return match($function){
            'controller' => RemoveController::run($nama,$admin),
            'schema' => RemoveSchema::run($nama),
            'template' => RemoveTemplate::run($nama),
            default => $this->help()
        };
    }

    protected function info ($opsi) {
        return match($opsi) {
            'route' => $this->infoRoute(),
            default => $this->help()
        };
    }

    protected function db ($opsi) {
        return match($opsi) {
            'import' => Import::run(),
            'backup' => Backup::run(),
            'refresh' => Refresh::run(),
            'restore' => Restore::run(),
            default => $this->help()
        };
    }
    
}