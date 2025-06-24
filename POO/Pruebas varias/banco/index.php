<?php
require_once "banco.php";

$cuentaBancaria = new CuentaBancaria("Tu", 1000);
$cuentaBancaria-> depositar(500);
$cuentaBancaria-> retirar(200);
$cuentaBancaria-> mostrarSaldo();
$cuentaBancaria-> retirar(999999);
$cuentaBancaria-> mostrarSaldo();

?>