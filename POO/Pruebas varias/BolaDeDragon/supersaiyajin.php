<?php
require_once "saiyajin.php";

class SuperSaiyajin extends Saiyajin{

    // Se define explícitamente la clase para distinguirla de Saiyajin base
    public string $clase = "SuperSaiyajin";

    public function Transformar()
    {
        //La transformación solamente ocurre si el nivel de pelea supera cierto umbral
        if ($this->nivel_pelea >= 9000)
        {
            echo "<br>" . $this->nombre . " puede usar la forma Super Saiyajin";
        } else {
            echo "<br>" . $this->nombre . "no puede usar la forma Super Saiyajin";
        }

    }

}
?>