<?php
$pad = ["A" , "B", "C", "D"];

echo "<pre>";
print_r(array_pad($pad , 2 , "@"));

echo "</pre>";


echo "<pre>";
print_r(array_pad($pad , 9 , "@"));

echo "</pre>";



echo "<pre>";
print_r(array_pad($pad , -9 , "@"));

echo "</pre>";


$ayhaga = [10, 5 , 2,10];

echo "The product of the array is : " .array_product($ayhaga);

echo "<br>";

echo "The sum of the array is : " .array_sum($ayhaga);










