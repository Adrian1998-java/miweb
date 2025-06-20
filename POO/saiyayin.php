<?php
//Saiyajin definición clase
class Saiyajin{
    public string $nombre = "Goku";
    public int $nivel_pelea = 9000;

    public function __construct(){
        echo "Método constructor ejecutado <br>";
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

$goku = new Saiyajin();
var_dump($goku->Saludar());
echo "<br>";
var_dump($goku->NivelPelea());
echo "<br>";
var_dump($goku->SaludoCompleto());

echo "<br>";
echo $goku->SaludoCompleto();



echo "<br>";
$vegeta = new Saiyajin();
var_dump($vegeta);
echo "<br>";


?>