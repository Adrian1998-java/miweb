<?php

require_once "notificacion.php";

class Email extends Notificacion{
    private $direccionEmail;

    public function __construct($direccionEmail, $mensaje){
        parent::__construct($mensaje);
        $this-> direccionEmail = $direccionEmail;
    }

    public function enviar(){
        return " Enviado mensaje {$this->getMensaje()} a $this->direccionEmail";
    }
}

?> 