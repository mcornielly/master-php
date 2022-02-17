<?php


/**
 * Realizar un programa que valide una variable que este vacia y si esta vacia rellenarla con texto en minuscula y mostrarlo en 
 * mayusculas y negrita
 * 
 */


 $variable = "";

 if (empty($variable)) {
     echo "La variable se encuentra vacia";

     $variable = "este texto esta en minusculas.";
     echo "<br>";
     echo $variable;
     echo "<br>";
     echo "<strong>" . strtoupper($variable) . "</strong>";
     
} else {
    echo "La variable " . $variable;
}