<?php
require_once "producto.php";

class Ropa extends Producto{

    private $talla;

    public function __construct($nombre, $precio, $talla){
        parent::__construct($nombre, $precio);
        $this-> talla = $talla;
    }

    public function mostrarDetalle()
    {
        return "Nombre: " . parent::getNombre() . "\nPrecio: " . parent::getPrecio() . "\nTalla: " . $this-> talla;
    }
}





?>



