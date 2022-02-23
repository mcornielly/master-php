<?php

/**
 * Cookies : es un fichero que se almacena en el ordenador del usuario que visita la web, con web
 * con el fin de recordar datos o rastrear el comportamiento del mismo en la web.
 */

//  Crear cookie
// setcookie("nombre", "valor solo puede ser text", caducidad, ruta, dominio);

// Cookie basica
setcookie("mycookie", "valor de mi galleta");

// Cookie con expiracion
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));


header('Location:ver_cookies.php');
?>
