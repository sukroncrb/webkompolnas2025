<?php 

namespace Abiesoft\Resource\Utilities;

class Extract {

    public static function imageFromText($teks) {
        $matches = []; 
        preg_match_all('/\[(.*?)\]/', $teks, $matches);
        $extractedValues = $matches[1] ?? []; 
        
        if(count($extractedValues) > 0){
            for($i=0; $i<count($extractedValues); $i++){
                $teks = str_replace("[".$extractedValues[$i]."]","<div style='margin-top: 20px; margin-bottom: 20px;'><img src='".$extractedValues[$i]."' style='width: 100%;'></div>", $teks);
            }
            return $teks;
        }else{
            return $teks;
        }
    }

}