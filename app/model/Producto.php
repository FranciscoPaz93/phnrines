    <?php



    /**
     * User: FRAN
     * Date: 13/10/2016
     * Time: 20:38
     */
    use \libreries\ORM\Modelo;
    class Producto extends Modelo {
        protected static $table="productos";
        public $id;
        public $articulo;
        public $marca;
        public $tipo;
        public $descripcion;
        public $imagen;
        public $precio;
        public $color;
        public $stock;
        public $medida;
        public $tamano;
        public $codigo;
        public $top_ventas;
        public $promocion;
        public $descuento;
        public $label;
        public $points;
        public $contenedor;
        public $oferta;
        public $disponible;
        public $produccion;
        public $categoria;


        /**
         * @return string
         */
    

        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getArticulo()
        {
            return $this->articulo;
        }

        /**
         * @param mixed $articulo
         */
        public function setArticulo($articulo)
        {
            $this->articulo = $articulo;
        }

        /**
         * @return mixed
         */
        public function getMarca()
        {
            return $this->marca;
        }

        /**
         * @param mixed $marca
         */
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }

        /**
         * @return mixed
         */
        public function getTipo()
        {
            return $this->tipo;
        }

        /**
         * @param mixed $tipo
         */
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        /**
         * @return mixed
         */
        public function getDescripcion()
        {
            return $this->descripcion;
        }

        /**
         * @param mixed $descripcion
         */
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        /**
         * @return mixed
         */
        public function getImagen()
        {
            return $this->imagen;
        }

        /**
         * @param mixed $imagen
         */
        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }

        /**
         * @return mixed
         */
        public function getPrecio()
        {
            return $this->precio;
        }

        /**
         * @param mixed $precio
         */
        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        /**
         * @return mixed
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * @param mixed $color
         */
        public function setColor($color)
        {
            $this->color = $color;
        }

        /**
         * @return mixed
         */
        public function getStock()
        {
            return $this->stock;
        }

        /**
         * @param mixed $stock
         */
        public function setStock($stock)
        {
            $this->stock = $stock;
        }

        /**
         * @return mixed
         */
        public function getMedida()
        {
            return $this->medida;
        }

        /**
         * @param mixed $medida
         */
        public function setMedida($medida)
        {
            $this->medida = $medida;
        }

        /**
         * @return mixed
         */
        public function getTamano()
        {
            return $this->tamano;
        }

        /**
         * @param mixed $tamano
         */
        public function setTamano($tamano)
        {
            $this->tamano = $tamano;
        }

        /**
         * @return mixed
         */
        public function getCodigo()
        {
            return $this->codigo;
        }

        /**
         * @param mixed $codigo
         */
        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        /**
         * @return mixed
         */
        public function getTopVentas()
        {
            return $this->top_ventas;
        }

        /**
         * @param mixed $top_ventas
         */
        public function setTopVentas($top_ventas)
        {
            $this->top_ventas = $top_ventas;
        }

        /**
         * @return mixed
         */
        public function getPromocion()
        {
            return $this->promocion;
        }

        /**
         * @param mixed $promocion
         */
        public function setPromocion($promocion)
        {
            $this->promocion = $promocion;
        }

        /**
         * @return mixed
         */
        public function getDescuento()
        {
            return $this->descuento;
        }

        /**
         * @param mixed $descuento
         */
        public function setDescuento($descuento)
        {
            $this->descuento = $descuento;
        }

        /**
         * @return mixed
         */
        public function getLabel()
        {
            return $this->label;
        }

        /**
         * @param mixed $label
         */
        public function setLabel($label)
        {
            $this->label = $label;
        }

        /**
         * @return mixed
         */
        public function getPoints()
        {
            return $this->points;
        }

        /**
         * @param mixed $points
         */
        public function setPoints($points)
        {
            $this->points = $points;
        }

        /**
         * @return mixed
         */
        public function getContenedor()
        {
            return $this->contenedor;
        }

        /**
         * @param mixed $contenedor
         */
        public function setContenedor($contenedor)
        {
            $this->contenedor = $contenedor;
        }

        /**
         * @return mixed
         */
        public function getOferta()
        {
            return $this->oferta;
        }

        /**
         * @param mixed $oferta
         */
        public function setOferta($oferta)
        {
            $this->oferta = $oferta;
        }

        /**
         * @return mixed
         */
        public function getDisponible()
        {
            return $this->disponible;
        }

        /**
         * @param mixed $disponible
         */
        public function setDisponible($disponible)
        {
            $this->disponible = $disponible;
        }

        /**
         * @return mixed
         */
        public function getProduccion()
        {
            return $this->produccion;
        }

        /**
         * @param mixed $produccion
         */
        public function setProduccion($produccion)
        {
            $this->produccion = $produccion;
        }

        /**
         * @return mixed
         */
        public function getCategoria()
        {
            return $this->categoria;
        }

        /**
         * @param mixed $categoria
         */
        public function setCategoria($categoria)
        {
            $this->categoria = $categoria;
        }
     
    }
