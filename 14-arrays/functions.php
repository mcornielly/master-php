<?php

$groups = ['U2', 'Rolling Stones', 'Perl Jam', 'Oasis'];
$numbers = [1, 2, 3, 4,5];


// Ordenar
asort($groups);
var_dump($groups);

echo '<br>';

sort($groups);
var_dump($groups);

echo '<br>';
// Add Array
$groups[] = 'Nirvana';
var_dump($groups);

echo '<br>';
// Add Array
array_push($groups, 'Green Day');
var_dump($groups);

echo '<br>';
// delete Array
array_pop($groups);
var_dump($groups);

echo '<br>';
// delete Array
unset($groups[0]);
var_dump($groups);

echo '<br>';
// aleatorio
$indice = array_rand($groups);
echo $groups[$indice];


echo '<br>';
// invertir array
var_dump(array_reverse($numbers));


echo '<br>';
// buscar dentro de un array
$result = array_search('U2', $groups);
var_dump($result);

echo '<br>';
// contar o tamaño de arreglo
echo count($groups);
echo '<br>';
echo sizeof($groups);
