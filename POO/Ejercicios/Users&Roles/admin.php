<?php
require_once "users.php";

class Admin extends Usuario {
    public $nivelAcceso;
    
    public function __construct($nombre, $email, $nivelAcceso) {
        $this-> nombre = $nombre;
        $this-> email = $email;
        $this-> nivelAcceso = $nivelAcceso;
    }
    public function mostrarInfo()
    {
        echo "Admin $this->nombre con rol $this->nivelAcceso";
    } 
}

?>