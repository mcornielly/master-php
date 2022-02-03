<?php

// Realizar un ejercicio para mostrar lso numeros pares del 1 - 100;
$num = 1;
while ($num <= 100) {

    if ($num % 2 == 0)  {
        echo "Este numero es par - " . $num;
        echo "<br>";
    }

    $num++;
}