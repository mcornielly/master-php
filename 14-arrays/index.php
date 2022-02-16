<?php

/**
 * Arrays o arreglos
*/

/************ */


$movies = array('Titanic', 'Spiderman', 'Kings Man');
$groups = ['u2', 'Rolling Stones', 'Perl Jam'];
$people = array(
    'firts_name' => 'Miguel Angel Cornielly',
    'last_name' => 'Cornielly',
    'age' => 46,
);

$contacts = array(
    array(
        'name' => 'Magdalena Martinez',
        'email' => 'magdalenamartinez@gmail.com',
    ),
    array(
        'name' => 'Joshua Miguel Cornielly',
        'email' => 'jcornielly15@gmail.com',
    ),
    array(
        'name' => 'Miguel Angel Cornielly',
        'email' => 'mcornielly@gmail.com',
    ),
);

// Metodo for
echo "Listado de Pelicaulas";
echo "<ul>";

for ($i = 0; $i < count($movies); $i++) {
    echo '<li>'.$movies[$i].'</li>';
}

echo "</ul>";
echo "<hr>";


// Metodo foreach
echo "Listado de Grupos";
echo "<ul>";

foreach ($groups as $group) {
    echo '<li>'.$group.'</li>';
}

echo "</ul>";
echo "<hr>";


// Array personas
echo $people['last_name'];
echo "<hr>";

// Array multidimencionales
foreach ( $contacts as $key => $contact ){
    var_dump($contact['name']);
}

