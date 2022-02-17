<?php


/**
 * Crear un array con el contenido de la tabla
 * Accion   AVENTURAS           DEPORTES
 * GTA      ASSASINS            FIFA 19
 * COD      CRASH               PES 19  
 * PUGB     PRINCE OF PERSIA    MOTO GP    
 *                              MLB 19
 */



 $games = array(
    "ACCION" => array('GTA', 'GOD', 'PUGB'),
    "AVENTURA" => array('ASSASINS', 'CRASH', 'PRINCE OF PESIA'),
    "SPORTS" => array('MLB 19', 'FIFA 19', 'PES 19', 'MOTO GP 19'),
 );

// Crea un array de los indices.
$categories = array_keys($games);
// echo count($games);

?>

<table border="1">
    <?php include('includes/header.php'); ?>
    <?php include('includes/column1.php'); ?>
    <?php include('includes/column2.php'); ?>
    <?php include('includes/column3.php'); ?>
</table>


