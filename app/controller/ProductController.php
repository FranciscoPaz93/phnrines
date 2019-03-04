<?php

/**
*
*/
use view\view;

use libreries\ORM\FpORM;

class ProductController {

  public function index() {
    session_start();
    if ($_SESSION["privilegio"] =="admin") {
      $objC = new FpORM();

      $productos = $objC->Ejecutar("productos");
      return \view\view::create("administration.tables",array('pro' => $productos));
    }else{
      redirecciona()->to("");
    }

  }

  public function hola(){
      $productos = Producto::All();
      return \view\view::create("administration.tables",array('pro'=>$productos));
  }

  public function nuevo() {
    return \view\view::create("admin.prod.crear");
  }

  public function agregar() {

    $arti = $_POST["articulo"];
    $marca = $_POST["marca"];
    $descrip = $_POST["descripcion"];
    $color = $_POST["color"];
    $stock = (int) $_POST["stock"];
    $tipo = $_POST["tipo"];
    $tamano = $_POST["tamano"];
    $medida = $_POST["medida"];
    $cod  = $_POST["codigo"];
    $precio = (float) $_POST["precio"];
    $nom_imagen =  $_FILES['file']['name'];
    $imagen = $_FILES['file']['tmp_name'];
    $top=($_POST["top"]!="1") ? 0:1;
    $promocion=($_POST["promocion"]!="1") ? 0:1;
    $descuento=$_POST["descuento"];
    $label=$_POST["etiqueta"];
    $points = $_POST["estrellas"];
    $contenedor=$_POST["contenedor"];
    $oferta=($_POST["oferta"]!="1") ? 0:1;
    $disponible=($_POST["disponible"]!="1") ? 0:1;
    $produccion=($_POST["produccion"]!="1") ? 0:1;
    $transito=($_POST["transito"]!="1") ? 0:1;
    $categoria=$_POST["categoria"];
    $user= $_SESSION["UserID"];
    $url = ASSET_PATH."cata/";
    move_uploaded_file($imagen, $url.$nom_imagen);
    //$pre = array('$arti', '$descrip', '$color', 120, '$tipo', '$tamano', '$medida', '$cod', 1500, '$nom_imagen');
    $pre = array($arti, $marca, $tipo, $descrip, $nom_imagen,$precio,
        $color , $stock,  $medida, 
        $tamano, $cod, $top,$promocion,
        $descuento,$label,$points,$contenedor,$oferta,
        $disponible,$produccion,$categoria,$almacen,$user,$transito);
    $objC = new FpORM();
echo json_encode($pre);

    $objC->Ejecutar("insertarProducto", $pre);
      redirecciona()->to("administration");
  }

public function modificar($id)
{
    session_start();
  if ($_SESSION['acdc']=="active") {
    $productos = Producto::All();
    $producto = Producto::find("id", $id);
    echo json_response($producto);

  }else{
    redirecciona()->to("administration");
  }
}
public function buscador(){
    $tamano = $_POST["tamano"];
    $medida = $_POST["medida"];
    $pre = array($tamano,$medida)  ;
    $objC = new FpORM();
    $busqueda=$objC->Ejecutar("busqueda", $pre);
    echo json_encode($busqueda);
}
    public function buscarmarca(){
        $marca = $_POST["marca"];
        $pre = array($marca)  ;
        $objC = new FpORM();
        $busqueda=$objC->Ejecutar("busquedamarca", $pre);
      echo json_encode($busqueda);
    }
  public function actualizar() {
        $id = (int) $_POST["id"];
      $arti = $_POST["articulo"];
      $marca = $_POST["marca"];
      $descrip = $_POST["descripcion"];
      $color = $_POST["color"];
      $stock = (int) $_POST["stock"];
      $tipo = $_POST["tipo"];
      $tamano = $_POST["tamano"];
      $medida = $_POST["medida"];
      $cod  = $_POST["codigo"];
      $precio = (float) $_POST["precio"];
      $nom_imagen =  $_FILES['file']['name'];
      $imagen = $_POST['img-old'];
      $top=($_POST["top"]!="1") ? 0:1;
      $promocion=($_POST["promocion"]!="1") ? 0:1;
      $descuento=$_POST["descuento"];
      $label=$_POST["etiqueta"];
      $points = $_POST["estrellas"];
      $contenedor=$_POST["contenedor"];
      $oferta=($_POST["oferta"]!="1") ? 0:1;
      $disponible=($_POST["disponible"]!="1") ? 0:1;
      $produccion=($_POST["produccion"]!="1") ? 0:1;
      $transito=($_POST["transito"]!="1") ? 0:1;
      $categoria=$_POST["categoria"];
        $url = ASSET_PATH."cata/";

        //move_uploaded_file($imagen, $url.$nom_imagen);
      $pre = array($id, $arti, $marca, $tipo, $descrip,$nom_imagen,$precio,$color , $stock,  $medida, $tamano, $cod, $top,$promocion,$descuento,$label,$points,$contenedor,$oferta,$disponible,$produccion,$categoria,$transito);

      $objC = new FpORM();
        $objC->Ejecutar("actualizarProducto", $pre);
        redirecciona()->to("administration");
  }

  public function e($id) {
    $arti = Articulo::find("cod_articulo", $id);
    if (count($arti) == 1) {
      return view::create("admin.prod.nuevo", array("pro" => $arti));
    } else {
      echo "error";
      return redirecciona()->to("/prod/inventario");
    }
  }


  public function eliminar($id) {
    $producto = Producto::find("id", $id);

    if (count($producto) == 1) {
      $producto->eliminar($id, "id");
      redirecciona()->to("administration");
    } else {
      return redirecciona()->to("administration");
    }
  }


  public function todos() {
    $productos = Articulo::all();
    echo json_response($productos);
  }

  public function todo() {
    $invent = Catalogo::all();
    echo json_response($invent);
  }

}
