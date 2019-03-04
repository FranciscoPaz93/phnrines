<?php

/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 17/10/2016
 * Time: 13:55
 */
class Redirecciona{

    public function to($url){
        self::redirect($url);
        return new Redirecciona();
    }
    public static function message($var, $value=null){
        if (is_null($value)){
            foreach ($var as $clave=>$valor){
                $_SESSION[$clave]=$valor;
            }
        }else{
            $_SESSION[$var]=$value;
        }
        return new Redirecciona();
    }
    private function redirect($rute){
        $url = "";
        if (trim($_SERVER["PHP_SELF"], '/') == "index.php") {
          $url = "/" . $rute;
        }else {
          $urlprin = str_replace("index.php","",$_SERVER["PHP_SELF"]);
          $url = "/".trim($urlprin,"/").'/'.$rute;

        }
        header("Location:" . $url);
        return new Redirecciona();
    }

}
