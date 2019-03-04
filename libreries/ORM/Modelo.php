<?php
/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 15/10/2016
 * Time: 3:09
 */

namespace libreries\ORM;


class Modelo extends FpORM {

    //propiedad contiene todas las propiedades dinamicamente
    private $data =array();
    protected static $cnx;
    protected static $table;
    /**
     * Modelo constructor.
     * @param array $data
     */
    public function __construct($data=null)
    {
        $this->data = $data;
    }

    function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name]=$value;
    }
    function getColumnas(){
        return $this->data;
    }

}
