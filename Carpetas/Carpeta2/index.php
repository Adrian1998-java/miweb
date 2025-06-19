<?php 
echo "<html><head><title>Deciciones</title></head><body>";
$num = -3;
$num2 = "5";
/*
Operadores de comparación
> < >= <= 
== igualdad
!= desigualdad
=== igualdad estricta
!== desigualdad estricta

*/
// Sentencia if-else
echo "<h3>Ejecutando sentencia if:</h3>";
if($num > 4){
    echo "El valor de $num es mayor a 4";
} else {
    echo "El valor de $num es menor o igual a 4";
}
// Sentencia if-elseif-else
echo "<h3>Ejecutando sentencia if:</h3>";
if($num > 0){
    echo "<h3>El valor de $num es mayor que 0</h3>";
} else if($num == 0){
    echo "<h3>El valor de $num es igual a 0</h3>";
} else {
    echo "<h3>El valor de $num es menor que 0</h3>";
}

//Sentencia Switch
echo "<h3>Ejecutando sentencia Switch:</h3>";
switch($num){
    case 0:
        echo "El valor es igual a 0";
        break;
    case 1:
        echo "El valor es igual a 1";
        break;
    case 2:
        echo "El valor es igual a 2";
        break;
    default:
        echo "El valor no es igual a 0 ni 1 ni 2";
        break;
    }


echo "</body></html>";

?>