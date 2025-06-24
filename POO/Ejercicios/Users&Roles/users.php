<?php

class Usuario {
    private $nombre;
    private $email;

    public function __construct($nombre, $email) {
        $this-> nombre = $nombre;
        $this-> email = $email;
    }
    
    public function mostrarInfo()
    {
        echo "Nombre : $this->nombre, Email : $this->email";
    } 
}

?>