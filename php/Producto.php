<?php
require_once 'Categoria.php';
class Producto
    {
        private $id_producto;
        private $nombre;
        private $descripcion;
        private $precio;
        private $foto;
        private $id_categoria;




        public function __construct($nombre,$descripcion,$precio,$foto,$id_categoria = null) {
            $this->nombre=$nombre;
            $this->descripcion= $descripcion;
            $this->precio= $precio;
            $this->foto= $foto;
            $this->id_categoria= $id_categoria;
            $this->getNombre();
            $this->toStringg();
        }


        //get de todo

        public function toStringg() {
            
            return "'".$this->nombre."','".$this->descripcion."',".$this->precio.",'".$this->foto."'";
        }

        //get y set id_producto
        public function getIdProducto() {
            return $this->id_producto;

        }

        public function setIdProducto($id_producto) {
            $this->id_producto = $id_producto;
        }

        //get y set nombre

        public function getNombre() {
            return $this->nombre;

        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        //get y set descripcion

        public function getDescripcion() {
            return $this->descripcion;

        }

        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        //get y set precio
        public function getPrecio() {
            return $this->precio;

        }

        public function setPrecio($precio) {
            $this->precio = $precio;
        }

        //get y set foto

        public function getFoto() {
            return $this->foto;

        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }
        //get y set categoria
        public function getCategoria() {
            return $this->id_categoria;

        }

        public function setCategoria($id_categoria) {
            $this->id_categoria = $id_categoria;
        }
    }
?>