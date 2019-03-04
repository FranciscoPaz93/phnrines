<?php
/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 15/10/2016
 * Time: 3:18
 */

use libreries\ORM;

function includeModels(){
    $directorio=opendir(MODELS);
    while ($archivo=readdir($directorio)){
        if (!is_dir($archivo)){
            require_once MODELS.$archivo;
        }
    }
}
function asset($asset){
    $urlprin=trim(str_replace("index.php","",$_SERVER['PHP_SELF']), "/");
    if (strlen($urlprin)) {
    echo "/".$urlprin."/assets/".$asset;
  }else {
    echo $urlprin."/assets/".$asset;
  }


}
function url($rute){
  if (trim($_SERVER["PHP_SELF"],'/') == 'index.php') {
    echo "/".$rute;
  }else {
    $urlprin=str_replace("index.php","",$_SERVER["PHP_SELF"]);
    echo "/" . trim($urlprin,"/")."/".$rute;

  }
}

function csrf_token(){
    if (isset($_SESSION["token"])){
        unset($_SESSION["token"]);
    }
    $csrf_token = md5(uniqid(mt_rand(), true));
    $_SESSION["csrf_token"]=$csrf_token;
    echo $csrf_token;
}
//validar csrf token, por medio de sesiones
function val_csrf(){
    if ($_REQUEST["_token"]==$_SESSION["csrf_token"]){
        return true;
    }else{
        return true;
    }

}
function redirecionar($rute){
    $urlprin = str_replace("index.php","",$_SERVER["PHP_SELF"]);
    echo $urlprin;
    header("location:/".trim($urlprin,"/")."".$rute);
}
function redirecciona(){
    return new Redirecciona();
}

function getInput($name){
    $re= new Request();
    return $re->input($name);
}
function json_response($data)
{
    header('Content-Type: application/json');
    if (is_array($data)) {
        $array = array();
        foreach ($data as $d) {
            array_push($array, $d->getColumnas());
        }
        return json_encode($array);
    } else {
        return json_encode($data->getColumnas());
    }
}
