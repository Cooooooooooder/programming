<?php

// namespaces 
require "namespaces.php";

$iphone1 = new Apple\Hardware\CreatePhone();
$iphone1 -> sayHello();
echo "<pre>"; print_r($iphone1); echo "</pre>";

$sony1 = new Sony\CreatePhone();
$sony1 -> sayHello();
echo "<pre>"; print_r($sony1); echo "</pre>";

$LG1 = new LG\CreatePhone();
$LG1 -> sayHello();
echo "<pre>"; print_r($LG1); echo "</pre>";