<?php

// date functions

echo date_default_timezone_get() . "<br>";
echo date("Y-m-d H:i:s") ."<br>";

date_default_timezone_set("Africa/Kinshasa") . "<br>";
echo date_default_timezone_get() . "<br>";
echo date("Y-m-d H:i:s") ."<br>";


date_default_timezone_set("Africa/cairo") . "<br>";
echo date_default_timezone_get() . "<br>";
echo date("Y-m-d H:i:s") ."<br>";

$d = date_create("" , timezone_open("Australia/Perth"));
echo date_format($d , "Y-m-d H:i:s");

echo "<br>";
var_dump(checkdate(10, 23 , 1034));
echo "<br>";
var_dump(checkdate(-10, 23 , 1034));
echo "<br>";
var_dump(checkdate(10, 23 , -1034));

echo "<br>";
var_dump(checkdate(2, 31 , 1034));
