<?php
require_once "producto.php";

class Electrico extends Producto{

    private $garantia;

    public function __construct($nombre, $precio, $garantia){
        parent::__construct($nombre, $precio);
        $this-> garantia = $garantia;
    }

    public function mostrarDetalle()
    {
        return "Nombre: " . parent::getNombre() . "\nPrecio: " . parent::getPrecio() . "\nGarantia: " . $this-> garantia;
    }
}





?>



