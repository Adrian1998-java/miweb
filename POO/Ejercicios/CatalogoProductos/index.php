<?php

require_once "electrico.php";
require_once "ropa.php";

$electrico1 = new Electrico("Lavadora", 100, 10);
$ropa1 = new Ropa("Camiseta", 20, "Nike");

echo $electrico1->mostrarDetalle();
echo "<br>";
echo $ropa1->mostrarDetalle();

?>