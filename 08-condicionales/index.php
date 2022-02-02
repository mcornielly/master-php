<?php


// CONDICIONAL OR
$url = "https://tools.wehaaserver.com/sitios/jennerchev.com.php?type=used-inventory&url=https://tools.wehaaserver.com/see-jennerchevcom_NEW_Inventory-246.html";

$used=(strpos($url,"used-inventory")!==false or strpos($url,"used-cars")!==false or  strpos($url,"used-south-orlando-inventory")!==false or  strpos($url,"used-winter-park-inventory")!==false)?'INVENTORY_LISTING_DEFAULT_AUTO_USED':'INVENTORY_LISTING_DEFAULT_AUTO_NEW';

echo '<pre>';
echo $used . ' CONSICIONAL OR';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<hr>';

// CONDICIONAL IF CON AND &&
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;


if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO PUEDE TRABAJAR";
}

// CONDICIONAL IF CON OR ||

echo '<br />';
echo '<hr>';
$country = "MEXICO";


if ($country == "MEXICO" || $country == "COLOMBIA" || $country == "VENEZUELA") {
    echo "SE HABLA ESPAÑOL";
} else {
    echo "NO SE HABLA ESPAÑOL";
}

// CONDICIONAL SWITCH ||

echo '<br />';
echo '<hr>';
$day = 7;


switch ($day) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
    case 5:
        echo "Viernes";
        break;
     default:
        echo "Fin de Semana";    

}


// GOTO


goto mark;
echo 'Proceso 1';
echo 'Proceso 2';
echo 'Proceso 3';
echo 'Proceso 4';


mark:
echo "<h2>Saltar procesos<h2/>";