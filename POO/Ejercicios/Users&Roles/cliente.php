<?php
require_once "users.php";

class Cliente extends Usuario {
    public $saldo;
    
    public function __construct($nombre, $email, $saldo) {
        $this-> nombre = $nombre;
        $this-> email = $email;
        $this-> saldo = $saldo;
    }

    public function mostrarInfo()
    {
        echo "Cliente $this->nombre con un saldo de $this->saldo";
    } 
}



?>