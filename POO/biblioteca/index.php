<?php
require_once "libro.php";

$libro1 = new Libro("La casa de Bernanda Alba", "Laura Albert", 2001);
$libro2 = new Libro("Advengers", "Marvel", 2020);
$libro3 = new Libro("Pequeño demonio", "Raymond Chandler", 1954);

$libro1->mostrarInfo();
$libro2-> mostrarInfo();
$libro3-> mostrarInfo();

echo "Ahora cambiamos uno de los valores a través del encapsulamiento <br>";

$libro1->setTitulo("Podemos del bueno");
$libro1->setAutor("Camilo Sexto");
$libro1->setAnioPublicacion(1998);
$libro1->mostrarInfo();

?>