<?php

$char = ["A" , "B", "I", "X", "W", "Q", "O"];

echo "<pre>";
print_r($char);
echo "<pre>";


for($i =0 ; $i < 8 ; $i++)
{

$shi = array_shift($char);
echo "$shi";
echo "<br>";
echo "<pre>";
print_r($char);
echo "<pre>";

}




$str = ["A" , "B", "I", "X", "W", "Q", "O"];

echo "<pre>";
print_r($str);
echo "<pre>";


for($i =0 ; $i < 8 ; $i++)
{

$shi = array_pop($str);
echo "$shi";
echo "<br>";
echo "<pre>";
print_r($str);
echo "<pre>";

}

$push = ["X" , "Y"];
array_push($push , "A" , "B" , "C");

echo "<pre>";
print_r($push);
echo "<pre>";

array_unshift($push , "_A" , "_B" , "_C");

echo "<pre>";
print_r($push);
echo "<pre>";



