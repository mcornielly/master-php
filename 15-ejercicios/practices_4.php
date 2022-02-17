<?php


/**
 * crear un script en php que tenga 4 varibales, una tipo Array 
 * Una variable tipo String
 * Una variable tipo Bolena
 * y mostrar en pantalla el tipo de variable
 * 
 */


$array = array(1,2,3,4,5,6);

if (is_array($array)) {
    echo "La variable es un Array";
    echo "<br>";
}

echo "<hr>";

$var = "hola nundo";

if (is_string($var)) {
    echo "La variable es un String";
    echo "<br>";
}


echo "<hr>";

$bolean = true;

if (is_bool($bolean)) {
    echo "La variable es un Buleano";
    echo "<br>";
}

echo "<hr>";

$number = 15;

if (is_integer($number)) {
    echo "La variable es un Entero";
    echo "<br>";
}