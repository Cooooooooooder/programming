<?php

$item = ["a" =>"A" ,"b" => "B","c" => "I","d" => "X","e" => "W","f" => "Q","g" => "O"];

sort($item);
echo "<pre>";
print_r($item);
echo "<pre>";

rsort($item);
echo "<pre>";
print_r($item);
echo "<pre>";

$item = ["a" =>"A" ,"b" => "B","c" => "I","d" => "X","e" => "W","f" => "Q","g" => "O"];

asort($item);
echo "<pre>";
print_r($item);
echo "<pre>";

arsort($item , );
echo "<pre>";
print_r($item);
echo "<pre>";

ksort($item);
echo "<pre>";
print_r($item);
echo "<pre>";


krsort($item);
echo "<pre>";
print_r($item);
echo "<pre>";

$files = ["Photo1.png" , "Photo20.png" , "photo3.png"];


sort($item);
echo "<pre>";
print_r($files);
echo "<pre>";


natsort($files);
echo "<pre>";
print_r($files);
echo "<pre>";
















