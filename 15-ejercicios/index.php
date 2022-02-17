<?php

/**
 * Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros y que realice lo siguiente
 * -- Recorrerlo y mostrarlo
 * -- Ordenarlo y mostrarlo
 * -- Mostra su longitud
 * -- Buscar un elemento
 */


$nums = array(11,35,23,48,25,61,37,18);

//  Recorrer y mostrar
echo "<h1> Mostrar Array </h1>";
foreach ($nums as $id => $num) {
    echo  $num . "<br>";
}

//  Ordenar
echo "<h1> Ordenar Array </h1>";
echo '<br>';
sort($nums);
var_dump($nums);

//  Longit ud
echo "<h1> Longitud Array </h1>";
echo '<br>';
echo count($nums);

//  Buscar
echo "<h1> Buscar en el  Array </h1>";
echo '<br>';
$search = array_search(23, $nums);
echo $search;


