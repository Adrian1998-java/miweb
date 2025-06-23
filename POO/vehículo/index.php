<?php
require_once "vehiculo.php";
echo"<!DOCTYPE html>
<html>
<head><title>Vehiculo</title></head><body>";
$moto = new Moto("Roja", "Peugot", 90, 2);
echo "<h2>{$moto->mostrarInfo()}</h2>";

echo "</body></html>"






?>