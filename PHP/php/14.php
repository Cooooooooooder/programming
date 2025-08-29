<?php

$email = "oIERAdif*  @nn.sa";

var_dump(filter_var($email ,FILTER_VALIDATE_EMAIL , FILTER_NULL_ON_FAILURE ));
ECHO "<BR>";
$int = "1000";
var_dump(filter_var($int ,FILTER_VALIDATE_INT , ["flags" => FILTER_NULL_ON_FAILURE , "options" => ["min_range" => 50 , "max_range" => 1000] ] ));
echo "<br>";
var_dump(filter_var($email , FILTER_SANITIZE_EMAIL));

ECHO "<BR>";
$int = "88+9fkd**3   @gmail.com";

var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT ));

echo "<br>";
$float = "1,342,FGSD345.3@#$%4";

var_dump(filter_var($float , FILTER_SANITIZE_NUMBER_FLOAT, ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]));
echo "<br>";

$url = "https://elzero.org";

var_dump(filter_var($url , FILTER_SANITIZE_URL));















