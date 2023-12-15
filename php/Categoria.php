<?php

class Categoria
{
    private $id_categoria;
    private $nombre_categoria;
    private $foto;

    public function __construct($nombre_categoria,$foto) {
        
        $this->nombre_categoria = $nombre_categoria;
        $this->foto = $foto;
        $this->toStringg();

    }

    public function toStringg() {
            
        return "'".$this->nombre_categoria."','".$this->foto."'";
    }

    //get y set foto

    public function getFoto() {
        return $this->foto;

    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    //get y set id_categoria

    public function getIdCategoria() {
        return $this->id_categoria;

    }

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    //get y set nombre_categoria

    public function getNombreCategoria() {
        return $this->nombre_categoria;

    }

    public function setNombreCategoria($nombre_categoria) {
        $this->nombre_categoria = $nombre_categoria;
        
    }

}


?>