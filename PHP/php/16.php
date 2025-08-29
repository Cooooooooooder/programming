<?php
//file system function


echo disk_total_space("C:") /1024/1024/1024  . "<br>";
echo disk_free_space("C:") /1024/1024/1024  . "<br>";
var_dump(file_exists("D:\\xampp\htdocs\admin\del.php"));
echo "<br>";

echo filesize("12.php") . "<br>";

var_dump(is_dir("D:\\xampp\htdocs\admin"));
echo "<br>";
var_dump(is_dir("14.php"));
echo "<br>";
mkdir("dellll" , 0777 , true);
// rmdir("dellll");
var_dump(file_exists("dellll"));
echo "<br>";

echo basename(__file__) . "<br>";
echo basename(__file__ , ".php")  . "<br>";
echo dirname(__file__ , 1) . "<br>";
echo realpath(__file__) . "<br>";


echo "<pre>";
print_r(pathinfo(__file__));
echo "</pre>";

echo pathinfo(__file__)["extension"] . "<br>";
echo pathinfo(__file__)["dirname"] . "<br>";

echo pathinfo(__file__ , PATHINFO_DIRNAME);



















