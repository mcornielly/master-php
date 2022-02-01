<?php

$url = "https://tools.wehaaserver.com/sitios/jennerchev.com.php?type=used-inventory&url=https://tools.wehaaserver.com/see-jennerchevcom_NEW_Inventory-246.html";


$used=(strpos($url,"used-inventory")!==false or strpos($url,"used-cars")!==false or  strpos($url,"used-south-orlando-inventory")!==false or  strpos($url,"used-winter-park-inventory")!==false)?'INVENTORY_LISTING_DEFAULT_AUTO_USED':'INVENTORY_LISTING_DEFAULT_AUTO_NEW';

echo $used;