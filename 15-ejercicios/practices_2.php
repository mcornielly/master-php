<?php


/**
 * Realizar un programa que permita agregar valores a un array mientras que su longitud sea menor a 120
 * y luego mostrarlo por pantalla.
 * 
 */

$new_article = isset($_GET['article']) ? $_GET['article'] : '';

$articles = array('manzanas', 'peras', 'patilla');
$quantity = count($articles);

if ($quantity < 120) {
    array_push($articles, $new_article);
}

echo "<h1> Listado de Artículos </h1>";
echo "<h3> Total Artículos: $quantity </h3>";

foreach ($articles as $article) {
    echo $article . "<br>";
}

// Solucion 2
echo "<hr>";

$element = array();


for ($i = 0; count($element) < 120; $i++) {
    $element[] = 'Elemento - ' . $i . '<br>';
}

var_dump($element);