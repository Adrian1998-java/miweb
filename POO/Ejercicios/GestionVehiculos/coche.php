<?php
require_once "vehiculo.php";

class Coche extends Vehiculo{
    private $numPuertas;

    public function __construct($marca, $modelo, $color, $numPuertas){
        parent::__construct($marca, $modelo, $color);
        $this-> numPuertas = $numPuertas;
    }

    public function calcularDias($dias)
    {
        return $this-> precioDia * $dias * 0.9;
    }

}

?>