<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelpController
 *
 * @author hexsoft
 */
use view\view;

use libreries\ORM\FpORM;
class HelpController {
  public function buscar()
  {
    $o = new FpORM;
    $tamano = $_POST['tamano'];
    $medida = $_POST['medida'];
    $pre =array($tamano, $medida );
    if($tamano==0&&$medida==0){
      $res = "Selecciona un valor";
    }else{
      if ($tamano==0||$medida==0) {
        if ($medida==0) {
          # ejecutar solo tamano
          $busqueda = $o->Ejecutar("busqueda", $pre);
          $salida = $this->listar($busqueda);
        }else {
          #ejecutar solo media
          $busqueda = $o->Ejecutar("busqueda", $pre);
          $salida = $this->listar($busqueda);
        }
      }else {
        #ejecutar ambos
        $busqueda = $o->Ejecutar("busquedaT", $pre);
        $salida = $this->listar($busqueda);
      }
    }
    echo $salida;
  }
  public function listar($value)
  {
      $salida ="";

      foreach ($value as $producto) {

        if (strlen($producto->articulo)>=16) {
          $art = substr($producto['articulo'], 0, 18) . "...";
        }else {
          $art = $producto['articulo'];
        }

        $salida.='<div class="col-sm-6 col-md-3" id="catalogo">
          <div class="thumbnail">
            <img src="' .ASSET_PATH. "cata/". $producto['imagen']. '" alt="rines" class="img-thumbnail" style="width:250px; height:250px;" ></img>
            <div class="caption">
              <h4>'.$art.'
            </h4>
            <table class="table">
              <tr>
                <td><b>Codigo:</b></td>
                <td>' .$producto['codigo'] .'</td>
              </tr>
              <tr>
                <td><b>Precio:</b></td>
                <td>'. money_format("%i",$producto['precio']) . " HNL" . '</td>
              </tr>
              <tr>
                <td><b>Medida:</b></td>
                <td>'. $producto['medida'] .'</td>
              </tr>
              <tr>
                <td><b>Tamaño:</b></td>
                <td>'.$producto['tamano'] .'</td>
              </tr>
            </table>
            <p><a href="#" class="btn btn-primary" role="button">Agregar</a> <a href="#" class="btn btn-default" role="button">Ver</a></p>
          </div>
        </div>
        </div>';
      }
      return $salida;
  }
}
