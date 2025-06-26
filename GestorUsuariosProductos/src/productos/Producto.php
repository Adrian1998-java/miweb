<?php

namespace App\Productos;

class Producto{
    private $nombre;

    public function __construct($nombre){
        $this-> nombre = $nombre;
    }

    public function mostrar(){
        return "Este producto se llama : " . $this-> nombre;
    }
}




