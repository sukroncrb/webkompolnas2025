<?php

namespace Abiesoft\Resource\Data;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Utilities\Input;

trait Collection {

    protected static function getOpsi() {
        $class = __CLASS__;
        $data = new $class;

        $tabel = "";
        (isset($data::$tabel)) ? $tabel = strtolower($data::$tabel) : $tabel = strtolower(explode("\Model\\",__CLASS__)[1]);

        $fieldtabel = [];
        $datafieldtabel = DB::terhubung()->query("DESCRIBE ".$tabel)->hasil();

        if(isset($data::$fillable)){
            $fieldfillable = $data::$fillable;
            for($i=0; $i<count($datafieldtabel); $i++){
                if(in_array($datafieldtabel[$i]->Field, $fieldfillable)){
                    $fieldtabel[$datafieldtabel[$i]->Field] = Input::get($datafieldtabel[$i]->Field);
                }
            }
        }else{
            for($i=0; $i<count($datafieldtabel); $i++){
                if($datafieldtabel[$i]->Field != "id" && $datafieldtabel[$i]->Field != "dibuat" && $datafieldtabel[$i]->Field != "diupdate"){
                    if(Input::get($datafieldtabel[$i]->Field) != ""){
                        $fieldtabel[$datafieldtabel[$i]->Field] = Input::get($datafieldtabel[$i]->Field);
                    }
                }
            }
        }        

        return [
            'tabel' => $tabel,
            'post' => $fieldtabel
        ];
    }

    public static function keep() {
        return self::getOpsi()['post'];
        // $status = [];
        // $input = DB::terhubung()->input(self::getOpsi()['tabel'],self::getOpsi()['post']);
        // ($input) ? $status = ["status" => "OK"] : $status = ["status" => $input];
        // return $status;
    }

    public static function replace() {
        $id = Input::get("id");
        $status = [];
        $perbarui = DB::terhubung()->perbarui(self::getOpsi()['tabel'], $id, self::getOpsi()['post']);
        ($perbarui) ? $status = ["status" => "OK"] : $status = ["status" => $perbarui];
        return $status;
    }
}