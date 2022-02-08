<?php

$nombre = "Miguel Angel";

// function debug
var_dump($nombre);


// function date
echo date('d-m-Y');

// Time
echo '<br>';
echo time();

// Matematicas
echo '<br>';
echo 'Raiz cuadrada : ' . sqrt(10);

echo '<br>';
echo 'Numero aleatorio 10 y 40 : ' . rand(10, 40);

echo '<br>';
echo 'Numero PI : ' . pi();

echo '<br>';
echo 'Funcion para redondear : ' . round(3.999999, 2);


// Otras funciones
echo '<br>';
echo gettype($nombre); // funcion tipo fr variables


// Si es un string
if (is_string($nombre)) {
    echo '<br>';
    echo 'Si lo es';
}

echo '<br>';
var_dump(!is_float($nombre));

if (!is_float($nombre)) {
    echo '<br>';
    echo "La variable nombre no es nuemro";
}

echo '<br>';
if (isset($nombre)) {
    echo "la variable no existe";
} else {
    echo "la variable existe";
}

echo '<br>';
$frase = "              Mi frase tiene espacio";

echo var_dump($frase);
echo '<br>';
echo trim($frase);


// eliminar una variable
$year = 2020;
unset($year);
echo $year;

echo "<br>";
// comprobar variable vacia
if (empty($text)) {
    echo "La variable text esta vacia";
} else {
    echo "La variable no text esta vacia";
}

echo "<br>";
// Tamaño de una cadena
$caneda = "123456";
echo strlen($caneda);

echo "<br>";
// Buscar un caracter
$frase = "la vida es bella";
echo strpos($frase, "es");

echo "<br>";
// remplazar un caracter
$frase = str_replace("bella", "linda", $frase);
echo $frase;

echo "<br>";
// Mayus y Minus
echo strtoupper($frase);
echo "<br>";
echo strtolower($frase);


