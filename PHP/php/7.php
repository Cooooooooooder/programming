<?php
$first = ["Ahmed" , "Sabry" , "Gazaly" , "awad" , "fahmy"];
$second = ["Basiony" , "Taher" , "Omar" , "Sameer" , "Shaimaa"];


function fun($f , $l) 
{
    return "Hello Mr $f $l";
}

echo "<pre>";
print_r(array_map("fun", $first , $second) );
echo "</pre>";

$nums = [
    1 => 3,
    5 => 2,
    15 => 9,
    19 => 8,
    11 => 0,
];

function check_nums($n)
{
    return $n > 4;
}

echo "<pre>";
print_r(array_filter($nums , "check_nums" ));
echo "</pre>";

echo "<pre>";
print_r(check_nums( $nums) );
echo "</pre>";



















