<?php

namespace App\Usuarios;

class Usuario {
    private $nombre;    

    public function __construct($nombre){
        $this-> nombre = $nombre;
    }

    public function saludar()
    {
        return "Hola, soy " . $this-> nombre;
    }
}