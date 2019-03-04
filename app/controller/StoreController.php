<?php
/**
 * Created by PhpStorm.
 * User: hexsoft
 * Date: 30/07/18
 * Time: 14:16
 */
use view\view;

use libreries\ORM\FpORM;
class StoreController
{
public function index(){

    $o = new FpORM();

    $productos = $o->Ejecutar("productos");

    return \view\view::create("store",array('catalogo'=>$productos,
        'tamano'=> $this->tamano(),
        'medidas'=>$this->medida(),
        'brand'=>$this->brand()
        ));
}
    public function produccion(){

        $o = new FpORM();

        $productos = $o->Ejecutar("productosProduccion");
        return \view\view::create("produccion",array('catalogo'=>$productos,
            'tamano'=> $this->tamano(),
            'medidas'=>$this->medida()
        ));
    }
    protected function tamano() {
        $o = new FpORM;
        $med = $o->Ejecutar("listTamano");
        return $med;
    }
    protected function medida() {
        $o = new FpORM;
        $med = $o->Ejecutar("listMedida");
        return $med;
    }
    protected function brand(){
        $o = new FpORM;
        $brand = $o->Ejecutar('listBrand');
        return $brand;
    }
    protected function productos(){
        $o = new FpORM;
        $productos = $o->Ejecutar('productos');
        echo json_encode($productos);
    }
    public function detalles($id){

    $o = new FpORM();
    $detalles = $o->Ejecutar("detalles",array($id));
    $medida = $detalles[0]['medida'];
    $relacionados = $o->Ejecutar("relacionados",array($medida));
    return \view\view::create("detalles",array('item'=>$detalles,'relacionados'=>$relacionados));

    }
}