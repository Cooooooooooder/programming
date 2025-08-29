<?php

// Filter functions 

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>";


$VAR = "ON";
if (filter_var($VAR , FILTER_VALIDATE_BOOL))
{
    ECHO "THIS IS TRUE";
}














