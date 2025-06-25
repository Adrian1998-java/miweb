<?php

require_once "notificacion.php";

class SMS extends Notificacion{
    private $numeroTelefono;

    public function __construct($numeroTelefono, $mensaje){
        parent::__construct($mensaje);
        $this-> numeroTelefono = $numeroTelefono;
    }

    public function enviar(){
        return " Enviado mensaje {$this->getMensaje()} a $this->numeroTelefono";
    }
}

?> 