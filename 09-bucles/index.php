<?php

// BUCLES O CICLOS

// BUCLE WHILE

$num = 0;
while ($num <= 100) {
    echo "$num";

    if ($num != 100) {
        echo ", ";
    }

    $num++;

}

echo '<br />';
echo '<hr>';

if (isset($_GET['number'])) {
    $number = (int) $_GET['number'];
} else {
    $number = 1;
}

echo "<h1>Tabla de Multiplicar del N " . $number . "<h1 />";
$num = 1;
while ($num <= 10) {
    echo $number . " X " . $num . " = " . ($number * $num);
    echo "<br>";

    $num++;

}

// Bucle DO WHILE
echo '<br />';
echo '<hr>';
$age = 17;
$counter = 1;

do {
    echo "Tienes acceso al local privado";
    echo "<br>";
    $counter++;
}while($age >= 18 && $counter <= 10);
