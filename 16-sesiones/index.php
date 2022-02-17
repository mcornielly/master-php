<?php

/**
 * Sesion: Almacenar y persistir datos del usuario mientras que navega un sitio web
 * hasta que se cierra la sesion o cierra el navegador
 * * important
 * ? Comentario
 * ! Alert.
 */

 // Iniciar la sesion
 session_start();


 // Variable local
 $variable_normal = "Esto es una variable local";

 // Variable de sesion
 $_SESSION['variable_session'] = "VARIABLE DE SESSION";


 echo $variable_normal . "<br>";
 echo $_SESSION['variable_session'];



