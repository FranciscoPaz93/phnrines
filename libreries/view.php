<?php namespace view;

/**
 * User: FRAN
 * Date: 15/10/2016
 * Time: 0:32
 */
class view
{
    public static function create($path,$key=null,$valor=null){
        if ($path!=""){
            $paths = explode(".",$path);
            $ruta="";
            for ($i=0;$i<count($paths);$i++){
                if ($i==count($paths)-1){
                    $ruta.=$paths[$i].".php";
                }else{
                    $ruta.=$paths[$i]."/";
                }

            }
        if (file_exists(VIEW_PATH.$ruta)){
            if (!is_null($key)){
                if (is_array($key)){
                    extract($key,EXTR_PREFIX_SAME,"");

                }else{
                    ${$key}=$valor;
                }
            }
            include VIEW_PATH.$ruta;
        }else{
            die("no existe la vista");
        }

        }

    }

}