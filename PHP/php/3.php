<?php

$merge_one = ["One" => "PHP" , "Two" => "CSS", "Three" => "JavaScript", "four" => "python"];
$merge_two = ["four" => "C#" , "five" => "C", "six" => "Java", "seven" => "Kotlen"];

echo "<pre>";
print_r(array_merge($merge_one , $merge_two));
echo "</pre>";


$merge_three = [3 => "PhP" , 2 => "Java" , 7 => "CSS"];
$merge_four = [4 => "Soft" , 3 => "python" , 8 => "Dart"];

echo "<pre>";
print_r(array_merge($merge_three , $merge_four));
echo "</pre>";


echo "<pre>";
print_r(array_replace($merge_one , $merge_two));
echo "</pre>";


echo "<pre>";
print_r(array_replace($merge_three , $merge_four));
echo "</pre>";


$characters = ["A", "G", "Y", "W", "X", "C", "E", "I", "L", "J"];

echo $characters[array_rand($characters ) ] . "<br>";
echo "<br>";
for($i = 0 ; $i <3 ; $i++)
{
echo $characters[array_rand($characters )] . "<br>";
}
echo "<br>";

shuffle($characters);

echo "<pre>";
print_r($characters);
echo "</pre>";


