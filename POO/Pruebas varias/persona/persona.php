<?php
// Definir la clase
class Persona
{
    //Atributos de la clase
    public $nombre;

    //Métodos de la clase
    public function saludar()
    {
        echo "¡Hola, soy {$this-> nombre}!";
    }
}

//Creamos un objeto
$persona1 = new Persona();
$persona1->nombre = "Adrian";
$persona1->saludar();

?>