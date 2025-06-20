<?php
/*
20 ejercicios básicos PHP
1. Mostrar un mensaje de saludo usando una variable.
2. Sumar dos números almacenados en variables y mostrar el resultado.
3. Calcular el área de un rectángulo con base y altura dadas.
4. Verificar si un número es mayor que otro.
5. Determinar si un número es par o impar.
6. Evaluar si una persona es mayor de edad con base en su edad.
7. Mostrar el mayor de tres números usando condicionales.
8. Mostrar los números del 1 al 10 usando un bucle while.
9. Sumar los números del 1 al 100 usando un bucle for.
10. Mostrar los números pares del 1 al 20 usando un bucle for.
11. Contar cuántos números pares hay entre 1 y 50.
12. Generar la tabla de multiplicar del 5 usando un bucle.
13. Calcular el factorial de un número dado.
14. Mostrar la suma de los números impares del 1 al 50.
15. Pedir tres notas y calcular la media, luego indicar si está aprobado
(media >= 5).
16. Imprimir los números del 10 al 1 en orden descendente.
17. Mostrar todos los múltiplos de 3 entre 1 y 30.
18. Pedir la base y la altura de un triángulo y mostrar su área.
19. Mostrar los primeros 10 números de la serie Fibonacci.
20. Pedir un número y mostrar si es primo o no.
*/

// 1. Mostrar un mensaje de saludo usando una variable.
$nombre = "Adrian<br>";
echo "Hola, $nombre<br>";

// 2. Sumar dos números almacenados en variables y mostrar el resultado.
$a = 5;
$b = 10;
echo "$a + $b<br>";

// 3. Calcular el área de un rectángulo con base y altura dadas.
$base = 5;
$altura = 10;
echo "$base * $altura<br>";

// 4. Verificar si un número es mayor que otro.
$a = 5;
$b = 10;
if ($a > $b) {
    echo "El número $a es mayor que $b<br>";
}
// 5. Determinar si un número es par o impar.
$a = 5;
if ($a % 2 == 0) {
    echo "El número $a es par<br>";
}
// 6. Evaluar si una persona es mayor de edad con base en su edad.
$edad = 18;
if ($edad >= 18) {
    echo "La persona es mayor de edad<br>";
    }

// 7. Mostrar el mayor de tres números usando condicionales.
$a = 5;
$b = 10;
$c = 15;
if ($a > $b && $a > $c) {
    echo "El número $a es el mayor<br>";
    }
    elseif ($b > $a && $b > $c) {
        echo "El número $b es el mayor<br>";
        }
        else {
            echo "El número $c es el mayor<br>";
            }

// 8. Mostrar los números del 1 al 10 usando un bucle while.
$i = 2;
echo "1";
while ($i <= 10) {
    echo ", $i";
    $i++;
}
echo "<br>";

// 9. Mostrar la suma de los numeros del 1 al 100 usando un bucle for.
$suma = 1;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
    }
echo "La suma es $suma<br>";

// 10. Mostrar los números pares del 1 al 20 usando un bucle for.
echo "2";
for ($i = 3; $i <= 20; $i++) { 
    if ($i % 2 == 0) {
        echo ", $i";
        }
    }
echo "<br>";
//11. Contar cuántos números pares hay entre 1 y 50.
$contador = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $contador++;
        }
}
echo "Hay $contador números pares<br>";
// 12. Generar la tabla de multiplicar del 5 usando un bucle.
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i);
    echo "<br>";
}

//13. Calcular el factorial de un número dado. 
$n = 5;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
    }
 echo "El factorial de $n es $factorial<br>";

// 14. Mostrar la suma de los números impares del 1 al 50.
$suma = 1;
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
    $suma += $i;
    }
}
echo "La suma es $suma<br>";

// 15. Pedir tres notas y calcular la media, luego indicar si está aprobado (media >= 5).
$nota1 = readline("Ingrese la primera nota: ");
$nota2 = readline("Ingrese la segunda nota: ");
$nota3 = readline("Ingrese la tercera nota: ");
$media = ($nota1 + $nota2 + $nota3) / 3;
if ($media >= 5) {
    echo "Aprobado<br>";
    } else {
        echo "No aprobado<br>";
        }

// 16. Imprimir los números del 10 al 1 en orden descendente.
for($i = 10; $i >=1; $i-- )
{
    echo $i;
}

//17. Mostrar todos los múltiplos de 3 entre 1 y 30.
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0) {
        echo $i;
        }
        }
echo "<br>";
// 18. Pedir la base y la altura de un triángulo y mostrar su área.
$base = readline("Ingrese la base del triángulo: ");
$altura = readline("Ingrese la altura del triángulo: ");
$area = ($base * $altura) / 2;
echo "El área del triángulo es $area<br>";

// 19. Mostrar los primeros 10 números de la serie Fibonacci.
$fib1 = 0;
$fib2 = 1;
echo "$fib1 $fib2";
for ($i = 2; $i <= 10; $i++) {
    $fib3 = $fib1 + $fib2;
    echo " $fib3";
    $fib1 = $fib2;
    $fib2 = $fib3;
    }
echo "<br>";
// 20. Pedir un número y mostrar si es primo o no.
$numero = readline("Ingrese un número: ");
$esPrimo = true;
for ($i = 2; $i <= $numero / 2; $i++) {
    if ($numero % $i == 0) {
        $esPrimo = false;
        break;
        }
        }
if ($esPrimo) {
    echo "El número es primo<br>";
} else {
    echo "El número no es primo<br>";
    }

?>