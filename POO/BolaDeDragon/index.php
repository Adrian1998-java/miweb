<?php
require_once "supersaiyajin.php";

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
$vegeta->nombre = "Vegetta";
$vegeta->nivel_pelea = 8500;
var_dump($vegeta->SaludoCompleto());
echo "<br>";

//Otra forma de asignar variables de objetos 
$broly = new Saiyajin("Broly", 9500);
echo $broly->SaludoCompleto();

echo "<br>";
$gohan = new SuperSaiyajin("Gohan", 10000);
echo $gohan->SaludoCompleto();
echo $gohan->Transformar();

?>