<?php


/**
 * Para ver el valor de las cookies, tengo que usar $_COOKIE, una variable supergobla,
 * es un array asociativo.
 */

 if (isset($_COOKIE['mycookie'])) {
     echo 'Existe la cookie --> ' . ' '  . $_COOKIE['mycookie'];
 } else {
     echo 'No Existe la cookie';
 }

echo "<br>";
 
 if (isset($_COOKIE['unyear'])) {
    echo 'Existe la cookie --> ' . ' '  . $_COOKIE['unyear'];
} else {
    echo 'No Existe la cookie';
}

?>
<br>
<a href="index.php">Crear Cookies</a>
<br>
<a href="delete_cookies.php">Borrar Cookies</a>