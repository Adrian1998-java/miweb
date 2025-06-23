<?php 
class Vehiculo{

    //propiedades
    protected $color = "";
    protected $marca = "";

    //Método constructor
    public function __construct($color, $marca){
        $this-> color = $color;
        $this-> marca = $marca;
    }

    //Mostrar información
    public function mostrarInfo(){
        return "El color del vehículo es: $this-> color y la marca es: $this-> marca";
    }

    //Método Genérico
    public function encender()
    {
        return "El vehículo está encendido";
    }

}

class Coche extends Vehiculo{
    //Propiedades
    protected $modelo = "";
    protected $puertas = "";

    public function __construct($color, $marca, $modelo, $puertas){
        parent::__construct($color, $marca);
        $this-> modelo = $modelo;
        $this-> puertas = $puertas;
    }

    public function mostrarInfo(){
        return "El color del vehículo es: $this-> color y la marca es: $this-> marca, el modelo es: $this-> modelo y tiene $this-> puertas puertas";
    }


}

class Moto extends Vehiculo{
    //Propiedades
    protected $cilindrada = "";
    protected $tamaño = "";

    public function __construct($color, $marca, $cilindrada, $tamaño){
        parent::__construct($color, $marca);
        $this-> cilindrada = $cilindrada;
        $this-> tamaño = $tamaño;
    }
    public function mostrarInfo(){
        return "El color del vehículo es: $this-> color y la marca es: $this-> marca, la cilindrada es: $this-> cilindrada y el tamaño es: $this-> tamaño";
    }
}

?>