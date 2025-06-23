<?php
//Saiyajin definición clase
class Saiyajin{

    public function __construct(public string $nombre = "Goku" , public int $nivel_pelea = 9000){
        echo "Método constructor ejecutado <br>";
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel_pelea;
    }

    public function Saludar()
    {
        return "Hola, soy {$this->nombre}";
    }
    public function NivelPelea()
    {
        return "Mi nivel de pelea es {$this->nivel_pelea}";
    }
    public function SaludoCompleto()
    {
        return $this->Saludar() . " y " . $this->NivelPelea();
    }

}



?>