<?php

/*
 * To change this license header, choose License Headers in Project Propehrties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PruebaController
 *
 * @author hexsoft
 */
use view\view;
use libreries\ORM\FpORM;

class PruebaController {
    //put your code here
    
    public function index() {
        return \view\view::create("hola");
                
    }
    public function guardar(){
     
    }
            
}
