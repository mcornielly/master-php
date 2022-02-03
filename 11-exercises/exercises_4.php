<?php


/**
 * Realizar un proceso de una calculadora obteniendo los nuemeros desde la url.
 */



if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];

    $sum = $num1 + $num2;
    $res = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    echo "<h1> calculadora<h1 />";

    echo "La Suma del numer A y B es : " . $sum . "<br>";
    echo "La Resta del numer A y B es : " . $res. "<br>";
    echo "La Multiplicacion del numer A y B es : " . $mult . "<br>";
    echo "La Division del numer A y B es : " . $div . "<br>";

} else {
    echo "No se puede realizar los operaciones";
}