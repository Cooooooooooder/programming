<?php

$bool = "k";

var_dump(filter_var($bool , FILTER_VALIDATE_BOOL , FILTER_NULL_ON_FAILURE));

echo "<br>";

$url = "https://elzero.org";

var_dump(filter_var($url , FILTER_VALIDATE_URL)) . "<BR>";
echo "<br>";
$urll = "http";

var_dump(filter_var($urll , FILTER_VALIDATE_URL)). "<BR>";
echo "<br>";

$urlll = "https://elzero.org/category";

var_dump(filter_var($urlll , FILTER_VALIDATE_URL , FILTER_FLAG_PATH_REQUIRED));

echo "<br>";


$url = "https://elzero.org/org?file='uuu'";

var_dump(filter_var($url , FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED));

echo "<br>";

echo "------------------------------------------------";
echo "<br>";
$url = "https://elzero.org/org?file='uuu'";

var_dump(filter_var($url , FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_PATH_REQUIRED));

echo "<br>";

echo "------------------------------------------------";

echo "<br>";
$ip = "192.168.1.1";
var_dump(filter_var($ip , FILTER_VALIDATE_IP , ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

echo "<br>";


echo "------------------------------------------------";

echo "<br>";
$ip = "00:1A:2B:3C:4D:5E";
var_dump(filter_var($ip , FILTER_VALIDATE_MAC));


























