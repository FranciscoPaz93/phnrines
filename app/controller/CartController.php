<?php
/**
 * Created by PhpStorm.
 * User: hexsoft
 * Date: 9/09/18
 * Time: 11:56
 */

class CartController
{
    public function agregar()
    {
        $p = new Producto();
        $p->setId($_POST['idText']);
        $p->setArticulo($_POST['artText']);
        $p->setPrecio($_POST['precio']);
        $p->setMedida($_POST['mdText']);
        $p->setTamano($_POST['tmText']);
        $p->setImagen($_POST['imgText']);

        session_start();
        if (isset($_SESSION['carrito'])){
            $carrito = $_SESSION['carrito'];
            $carritoini = $_SESSION['carritoini'];
            $carrito['total'] = count($carrito)+1;
        }
        else{
            $carrito = array();
            $carritoini = array();
            $carrito['total'] = 1;
        }

        array_push($carrito, $p);
        array_push($carritoini, $p);
        $_SESSION['carritoini'] = $carritoini;
        $_SESSION['carrito'] = $carrito;
        echo json_encode($carrito);


    }
}