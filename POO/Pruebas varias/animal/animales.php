<?php
//Poliformismo 
class Ave{
    public function sonido()
    {
        echo "Pio pio...";
    }
}
class Gato{
    public function sonido()
    {
        echo "Miau miau...";
    }
}

$animales = [new Ave(), new Gato()];

foreach ($animales as $animal)
{
    $animal->sonido();
    echo "<br>";
}
$animales[1]->sonido();



?>