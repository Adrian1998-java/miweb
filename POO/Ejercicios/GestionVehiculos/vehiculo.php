<?php
class Vehiculo
{
    private $marca;
    private $modelo;
    private $precioDia;

    public function __construct($marca, $modelo, $precioDia)
    {
        $this-> marca = $marca;
        $this-> modelo = $modelo;
        $this-> precioDia = $precioDia;
    }

    public function calcularDias($dias)
    {
        return $this-> precioDia * $dias;
    }

}


?>