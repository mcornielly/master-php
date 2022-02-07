<?php

/**
 * FUNCIONES:
 * 
 */


function getName($name) {
    return "El Nombre obtenido es : " . $name;
}


$name = getName("Miguel Angel");

echo $name;


echo "<br>";
echo "<hr>";

function table($number) {
    echo "<h1> Numero por la funcion " . $number . " <h1 />";

    for ($i=1; $i <= 10; $i++) {
         echo $number . " X " . $i . " = " . ($number * $i) . "<br>";
    }
}


table(4);



echo "<br>";
echo "<hr>";

function calculator($num1, $num2) {
    $sum = $num1 + $num2;
    $res = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    $result = '';

    $result .=  "<h1> calculadora<h1 />";

    $result .=  "La Suma del numer A y B es : " . $sum . "<br>";
    $result .=  "La Resta del numer A y B es : " . $res. "<br>";
    $result .=  "La Multiplicacion del numer A y B es : " . $mult . "<br>";
    $result .=  "La Division del numer A y B es : " . $div . "<br>";

    return $result;
}


 echo calculator(3,2);
 calculator(3,6);
