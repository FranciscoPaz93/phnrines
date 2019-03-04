<?php

/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 16/10/2016
 * Time: 20:23
 */

class AuthController
{

    public function index(){
        session_start();
        if (isset($_SESSION['privilegio'])){
            if ($_SESSION['privilegio']=='admin'){
                Redirecciona()->to("  administration");
            }else if ($_SESSION['privilegio']=='user'){
                Redirecciona()->to("administration");
            }
        }
        else{
            return \view\view::create("login");
        }
    }
    public function check(){
        session_start();
        if (val_csrf()){

            $user=$_POST["user"];
            $pass=$_POST["password"];
            $pass2= md5($pass);
            $objOrp=new \libreries\ORM\FpORM();
            $data = $objOrp->Ejecutar("loginU", array($user,$pass2) );
            if(count($data)==1){
                $_SESSION['acdc']="active";
                $_SESSION["usuario"] = $data[0]["Nombre"];
                $_SESSION["privilegio"] = $data[0]["tipo"];
                if ($_SESSION["privilegio"] =='admin'){
                   Redirecciona()->to("administration");

                }else{
                    Redirecciona()->to("");
                }

        }else{

               Redirecciona()->to("login")->message(array("mensaje"=>"Error al ingreasar" ,"estado"=>"false"));
            }
        }else{

            Redirecciona()->to("login");
        }
    }
    public function bienvenida(){
        return \view\view::create("mensajes.bienvenido");
        sleep(5);
        Redirecciona()->to('');
    }
    public function nuevousuario()
    {
        $name = $_POST['name'];
        $last = $_POST['last'];
        $user = $_POST["email"];
        $pass = $_POST["pwd"];

        $o = new \libreries\ORM\FpORM();
        $query = $o->Ejecutar("nuevousuario",array($user,$pass, $name, $last));
        if ($query){
            Redirecciona()->to("login");
        }else{
            Redirecciona()->to("login/bienvenida");
        }

    }
    public function disconect()
    {
        session_start();
      session_destroy();

session_unset();
      Redirecciona()->to("administration");
    }


}
?>
