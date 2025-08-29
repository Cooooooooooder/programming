<?php

// date_diff()

date_default_timezone_set("Africa/Cairo");

$reg = date_create("2022-01-09");
$now = date_create("now");

$diff = date_diff($reg , $now);

echo "<pre>";
print_r($diff);
echo "</pre>";


echo "You Are a member for " . "Days<br>";
echo "<br>------------ <br>";


echo date("Y-m-d H:i:s" , strtotime("next firday"))."<br>";
echo date("Y-m-d H:i:s" , strtotime("next firday"))."<br>";
echo date("Y-m-d H:i:s" , strtotime("next firday"))."<br>";
echo date("Y-m-d M D " , strtotime("tomorrow" , strtotime("1982-10-25")))."<br>";










