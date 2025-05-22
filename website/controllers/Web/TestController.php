<?php 

namespace App\Controller\Web;

use Abiesoft\Resource\Http\Controller;
use Abiesoft\Resource\Package\YoutubeApiService;
use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Reader;
use Abiesoft\Resource\Utilities\Generate;
use Abiesoft\Resource\Utilities\Cookies;
use Abiesoft\Resource\Mysql\DB;
use App\Model\Info;

final class TestController extends Controller
{

    public function index()
    {


        // $teks = "Komisi Kepolisian Nasional (Kompolnas) menggelar Malam Apresiasi Bersama Mitra Kompolnas dan Pisah Sambut Komisoner Periode 2020-2024 ke Periode 2024-2028 pada Jumat (8/11/2025).Acara tersebut diselenggarakan untuk memberikan apresiasi kepada seluruh Kementerian serta [http://127.0.0.1:4000/assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/4949846Screenshot_2025-05-07_103342.jpg] Lembaga-lembaga yang telah menjalin Kerjasama bersama Kompolnas.Selain acara tersebut, diselenggarakan juga pisah sambut antara Komisioner periode 2020-2024 ke Komisioner periode 2024-2028.
        // [http://127.0.0.1:4000/assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/4949846Screenshot_2025-05-07_103342.jpg]";

        // echo \Abiesoft\Resource\Utilities\Extract::imageFromText($teks);
        

        // Info::keep();

        // YoutubeApiService::videoTerbaru();

        // echo $finaldata['apikey'];
        // echo "<div>";
        // $kode = Cookies::lihat('_scf');
        // $hasil = Reader::secretCode($kode, Config::fromEnv('SECRET_KEY'));
        // echo $hasil;
        // print_r($hasil);
        // echo "</div>";

        // $geolocation = $latitude.','.$longitude;
        // $request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
        // $file_contents = file_get_contents($request);
        // $json_decode = json_decode($file_contents);
        // if(isset($json_decode->results[0])) {
        //     $response = array();
        //     foreach($json_decode->results[0]->address_components as $addressComponet) {
        //         if(in_array('political', $addressComponet->types)) {
        //                 $response[] = $addressComponet->long_name; 
        //         }
        //     }

        //     if(isset($response[0])){ $first  =  $response[0];  } else { $first  = 'null'; }
        //     if(isset($response[1])){ $second =  $response[1];  } else { $second = 'null'; } 
        //     if(isset($response[2])){ $third  =  $response[2];  } else { $third  = 'null'; }
        //     if(isset($response[3])){ $fourth =  $response[3];  } else { $fourth = 'null'; }
        //     if(isset($response[4])){ $fifth  =  $response[4];  } else { $fifth  = 'null'; }

        //     if( $first != 'null' && $second != 'null' && $third != 'null' && $fourth != 'null' && $fifth != 'null' ) {
        //         echo "<br/>Address:: ".$first;
        //         echo "<br/>City:: ".$second;
        //         echo "<br/>State:: ".$fourth;
        //         echo "<br/>Country:: ".$fifth;
        //     }
        //     else if ( $first != 'null' && $second != 'null' && $third != 'null' && $fourth != 'null' && $fifth == 'null'  ) {
        //         echo "<br/>Address:: ".$first;
        //         echo "<br/>City:: ".$second;
        //         echo "<br/>State:: ".$third;
        //         echo "<br/>Country:: ".$fourth;
        //     }
        //     else if ( $first != 'null' && $second != 'null' && $third != 'null' && $fourth == 'null' && $fifth == 'null' ) {
        //         echo "<br/>City:: ".$first;
        //         echo "<br/>State:: ".$second;
        //         echo "<br/>Country:: ".$third;
        //     }
        //     else if ( $first != 'null' && $second != 'null' && $third == 'null' && $fourth == 'null' && $fifth == 'null'  ) {
        //         echo "<br/>State:: ".$first;
        //         echo "<br/>Country:: ".$second;
        //     }
        //     else if ( $first != 'null' && $second == 'null' && $third == 'null' && $fourth == 'null' && $fifth == 'null'  ) {
        //         echo "<br/>Country:: ".$first;
        //     }
        // }

        // echo Reader::ip();
        // $cookies = Reader::secretCode(Cookies::lihat('_sc'),Config::fromEnv('SECRET_KEY')); // Sesi
        // $cookies = Reader::secretCode(Cookies::lihat('_scf'),Config::fromEnv('SECRET_KEY')); // Csrf
        // print_r($cookies);
    }

}
