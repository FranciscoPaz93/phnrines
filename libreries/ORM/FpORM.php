<?php
/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 15/10/2016
 * Time: 3:43
 */

namespace libreries\ORM;



use Connection;

class FpORM extends Connection
{
    protected static $cnx;
    protected static $table;

    /**
     * FpORM constructor.
     */
    /**
     * @return mixed
     */
    public static function getTable()
    {
        return self::$table;
    }
    public function __construct()
    {
        self::getConexion();
    }

    public static function getConexion()
    {
        self::$cnx = \Connection::connect();
    }

    public static function getDesconectar()
    {
        self::$cnx = null;
    }
    public function Ejecutar2($procedimiento, $params = null)
    {
        $query = "call " . $procedimiento;
        self::getConexion();
        if (!is_null($params)) {
            $paramsa = "";
            for ($i = 0; $i < count($params); $i++) {
                $paramsa .= ":" . $i . ",";
            }
            $paramsa = trim($paramsa, ",");
            $paramsa .= ")";
            $query .= "(" . $paramsa;
        } else {
            $query .= "()";
        }
        //echo $query;
        //agregando parametros al query
        $res = self::$cnx->prepare($query);
        for ($i = 0; $i < count($params); $i++) {
            $res->bindParam(":" . $i, $params[$i]);
        }
        $res->execute();
        $obj = [];
        foreach ($res as $row) {
            $obj[] = $row;
        }
        return true;
    }

    public function Ejecutar($procedimiento, $params = null)
    {
        $query = "call " . $procedimiento;
        self::getConexion();
        if (!is_null($params)) {
            $paramsa = "";
            for ($i = 0; $i < count($params); $i++) {
                $paramsa .= ":" . $i . ",";
            }
            $paramsa = trim($paramsa, ",");
            $paramsa .= ")";
            $query .= "(" . $paramsa;
        } else {
            $query .= "()";
        }
        //echo $query;
        //agregando parametros al query
        $res = self::$cnx->prepare($query);
        for ($i = 0; $i < count($params); $i++) {
            $res->bindParam(":" . $i, $params[$i]);
        }
        $res->execute();
        $obj = [];
        foreach ($res as $row) {
            $obj[] = $row;
        }
        return $obj;
    }

    public function eliminar($valor = null, $columna = null)
    {
        $query = "DELETE FROM " . static::$table . " WHERE " . (is_null($columna) ? "id" : $columna) . " = :p";
        //echo $query;
        self::getConexion();
        //preparar conexión
        $res = self::$cnx->prepare($query);
        // agregamos los parametros
        if (!is_null($valor)) {
            $res->bindParam(":p", $valor);
        } else {
            $res->bindParam(":p", (is_null($this->id) ? null : $this->id));
        }
        //ejecutar
        if ($res->execute()) {
            self::getDesconectar();
            return true;
        } else {
            return false;
        }
    }

    public function guardar()
    {
        $values = $this->getColumnas();
        $filtered = null; // una variable que va almacenar las columnas
        foreach ($values as $key => $value) {
            // separa si es id - sino lo agrega al array
            if ($value !== null && !is_integer($key) && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') {
                if ($value === false) {
                    $value = 0;
                }
                $filtered[$key] = $value;
                //echo $key." - ".$value;
            }
            //echo $key."<br>";
        }
        $columns = array_keys($filtered); // obteniendo las columnas

        if ($this->id) {
            $params = "";
            foreach ($columns as $columna) {
                $params .= $columna . " = :" . $columna . ",";
            }
            $params = trim($params, ",");
            $query = "UPDATE " . static::$table . " SET $params WHERE id =" . $this->id;
            //echo "hola";
        } else {
            $params = join(", :", $columns);
            $params = ":" . $params;
            $columns = join(", ", $columns);
            $query = "INSERT INTO " . static::$table . " ($columns) VALUES ($params)";

        }
        //echo $query;
        //preparamos la consulta
        try {
            self::getConexion();
            $res = self::$cnx->prepare($query);
            foreach ($filtered as $key => $val) {//cargamos todos los valores de los parametros
                $res->bindParam(":".$key,$val);
             }
            //realizamos una respuesta


            if ($res->execute()) {
                $this->id = self::$cnx->lastInsertId();
                echo "si";
                self::getDesconectar();
                return true;
            } else {
                //echo "nel";
                echo json_encode($res->errorInfo());
                return false;
            }
        } catch (PDOException $e) {
            echo 'Excepción capturada: ', $e->getMessage(), $e->getCode(), "\n";
        }

    }

    public static function where($columna, $valor)
    {
        $query = "SELECT * FROM " . static::$table . " WHERE " . $columna . " = :" . $columna;
        //echo $query;
        $class = get_called_class();
        self::getConexion();
        $res = self::$cnx->prepare($query);
        $res->bindParam(":" . $columna, $valor);
        //$res->setFetchMode( PDO::FETCH_CLASS, $class);
        $res->execute();
        //$filas = $res->fetch();
        //echo count($filas);
        $obj = []; // ----
        foreach ($res as $row) {
            $obj[] = new $class($row);
        }
        self::getDesconectar();
        return $obj;
    }

    public static function find($idname,$id)
    {
        //echo get_called_class();
        $resultado = self::where($idname, $id);
        if (count($resultado)) {
            return $resultado[0];
        } else {
            return [];
        }
    }

    public static function all()
    {
        $query = "SELECT * FROM " . static::$table;
        //echo $query;
        $class = get_called_class();
        self::getConexion();
        $res = self::$cnx->prepare($query);
        //$res->setFetchMode( PDO::FETCH_CLASS, $class);
        $res->execute();
        //$filas = $res->fetch();
        //echo count($filas);
        $arr = array();
        foreach ($res as $row) {
            $obj = new $class($row);
            array_push($arr, $obj);
        }
        self::getDesconectar();
        return $arr;
    }
}
