<?php
$encabezado = "<html><head><title>Bucles</title></head><body>";
$pie = "</body></html>";

echo $encabezado;
$num = 0;

//bucle while
echo "<h4>While \$num &alt;= 5</h4>";
while ($num <= 5) {
    echo "<p> El número es $num</p>";
    $num++;
}

$num = 0;
//bucle do-while
echo "<h4>Do-While \$num &alt;= 5</h4>";
do {
    echo "<p> El número es $num</p>";
    $num++;
}while ($num <= 5);

//bucle for
echo "<h4>For \$num &alt;= 5</h4>";
for ($num = 0; $num <= 5; $num++) {
    echo "<p> El número es $num</p>";
}

//array de ejemplo
$frutas = array("manzana", "plátano", "naranja", "fresa", "kiwi");
//bucle foreach
foreach ($frutas as $fruta) {
    echo " La fruta es $fruta <br>";
    }


echo $pie;






?>