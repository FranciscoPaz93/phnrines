<?php

/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 16/10/2016
 * Time: 18:45
 */
use view\view;

use libreries\ORM\FpORM;
class WelcomeController
{
 public function index(){

   $o = new FpORM();
   $ofertas = $o->Ejecutar("promocion");
   $topventas = $o->Ejecutar("top_ventas");
   return \view\view::create("index",array('promo'=>$ofertas,
                                                 'top'=>$topventas));

 }

 

}
