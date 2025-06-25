<?php

abstract class Notificacion {
    private $mensaje;

    public function __construct($mensaje) {
        $this-> mensaje = $mensaje;
    }

    public function getMensaje() {
        return $this-> mensaje;
    }

    abstract public function enviar();
}


?> 