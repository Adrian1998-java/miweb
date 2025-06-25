<?php

class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this-> nombre = $nombre;
        $this-> precio = $precio;
    }   

    public function mostrarDetalle(){
        return "Nombre: $this-> nombre, Precio: $this-> precio";
    }

    public function getNombre()
    {
        return $this-> nombre;
    }
    public function getPrecio()
    {
        return $this-> precio;
    }
}


?>