<?php
require_once "cliente.php";
require_once "admin.php";

/*
Descripción:
Crea una jerarquía de clases para un sistema de usuarios:
● Usuario (clase base): atributos nombre, email.
● Admin (hereda de Usuario): atributo nivelAcceso.
● Cliente (hereda de Usuario): atributo saldo.

Implementa:
● Métodos para mostrar información de cada tipo de usuario.
● Sobrescribe métodos para que Admin y Cliente muestren detalles
específicos (polimorfismo).
*/

$admin1 = new Admin("Adrian", "palote@correo.com", "Alto");
$cliente1 = new Cliente("Jose", "jose@correo.com", 1000);

$admin1->mostrarInfo();
echo "<br>";
$cliente1->mostrarInfo();



?>