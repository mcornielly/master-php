<?php

// Constantes 
// Es un contenedor de informacion que no se puede variar

const minombre = 'Miguel';
define('nombre', 'Victor');
define('web', 'victorrobles,com');

echo '<h1>'.minombre.'<h1/>';
echo '<h1>'.web.'<h1/>';

echo PHP_VERSION;
echo PHP_LIBDIR;
echo __DIR__;