<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web</title>
</head>
<body>
    <h1>Bienvenido a mi Web</h1>
    <?php 
        echo "¡Hola Mundo! Esta es mi primera página web";
        echo "<br>";
        echo "Aquí va otro hola mundo";

        $num1 = 10;
        $num2 = 2;

        $suma = $num1 + $num2;
        echo "La suma de $num1 y $num2 es: $suma";
        
        $resta = $num1 - $num2;
        echo "La resta de $num1 y $num2 es: $resta";
        
        $multiplicacion = $num1 * $num2;
        echo "El producto de $num1 y $num2 es: $multiplicacion";
        
        $division = $num1 * $num2;
        echo "La division de $num1 y $num2 es: $division";
        ?>
</body>
</html>