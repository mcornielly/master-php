<?php

/**
 * Variables locales: son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion.
 * (al menos que se realice un return).
 * 
 * Variables Globales: Son las que se declaran fuera y están disponibles dentro y fuera de las funciones.
 * 
 * 
 */


$phrase = "Solo una vez";

echo $phrase;

function getPhrase() {
    global $phrase;

    echo "<h1>$phrase<h1/>";

    $year = 2019;

    return $year;
}


echo getPhrase();


// Funciones Variables

function buenasDias() {
    return "<h1>Muy buenos Dias a Jr<h1/>";
}

function buenasTardes() {
    return "<h1>Muy buenos Tardes a Jr<h1/>";
    
}

function buenasNoches() {
    return "<h1>Muy buenos Noches a Jr<h1/>";
}

// $horario = "Tardes";
$horario = $_GET['horario'];


$miFuncion = "buenas" . $horario;

echo $miFuncion();