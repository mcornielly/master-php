<?php

// FOR
echo '<br />';
echo '<hr>';

$result = 0;

for ($i = 0; $i <= 100; $i++) {
    $result += $i;
    echo $result;
    echo "<br>";
}

echo '<br />';
echo '<hr>';
echo "Resultado Total :  " . $result;

echo '<br />';
echo '<hr>';

if (isset($_GET['number'])) {
    $number = $_GET['number'];
} else {
    $number = 2;
}

echo "<h1>Tabla de Multiplicar del N " . $number . "<h1 />";
$num = 1;
for ($num = 1; $num <= 10; $num++) {

    if ($number == 45) {
        echo "Operación no valida..!!";
        break;
    }
    echo $number . " X " . $num . " = " . ($number * $num);
    echo "<br>";
}