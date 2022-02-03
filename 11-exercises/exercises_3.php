<?php

/**
 * Obtener el cuadrado de cada numero natural hasta el 40 con bucle WHILE.
 */


$counter = 0;

while ($counter <= 40) {
    $cuadrado = $counter*$counter;
    echo "El cuadrado del numero " . $counter . " es : " . $cuadrado . "<br>";
    $counter++;
}