<?php

/**
 * Hacer un programa que nos muestre todos los numeros que existe entre dos numeros.
 */



if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];

    if ($number1 < $number2) {
        for ($i = 0; $i <= $number2; $i++) {
            if ($number1 < $i) {
                echo "Numeros entre " . $number1 . " y " . $number2 . " son --> " . $i . "<br>";
            }    
        }
    } else {
        echo "El numero inicial debe ser menor al numero final.";
    }
    

} else {
    echo "No exiten numeros para operar..!!";
}