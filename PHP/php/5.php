<?php

$char = ["A" , "B", "I", "X", "W", "Q", "O"];


echo "<pre>";
print_r($char);
print_r(array_slice($char , 1));
print_r(array_slice($char , 1 , 5));
echo "<pre>";

echo "------------------";
$item = ["a" =>"A" ,"b" => "B","c" => "I","d" => "X","e" => "W","f" => "Q","g" => "O"];

echo "<pre>";
print_r($item);
print_r(array_slice($item , 3));
print_r(array_slice($item , 1 , 5));
echo "<pre>";
echo "------------------";


$item = [10 =>"A" ,20 => "B",30 => "I",40 => "X",50 => "W",60 => "Q",70 => "O"];

echo "<pre>";
print_r($item);
print_r(array_slice($item , 3));
print_r(array_slice($item , 1 , 4 , true));
echo "<pre>";

echo "*******************";

$index = ["A" , "B", "I", "X", "W", "Q", "O"];

echo "<pre>";
print_r($index);
print_r(array_splice($index , 3));
print_r(array_splice($index , 1));
print_r(array_splice($index , 1 , 5 , ["HI " , "Bi " , "NI"]));

// print_r(array_splice($index , 1 , -1 , true));
print_r($index);
echo "<pre>";