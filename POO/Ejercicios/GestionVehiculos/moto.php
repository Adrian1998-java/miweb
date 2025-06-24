<?php
require_once "vehiculo.php";

class Moto extends Vehiculo{
    private $cilindrada;

    public function __construct($marca, $modelo, $color, $cilindrada){
        parent::__construct($marca, $modelo, $color);
        $this-> cilindrada = $cilindrada;
    }

    public function calcularDias($dias)
    {
        return $this-> precioDia * $dias * 0.5;
    }

}

?>