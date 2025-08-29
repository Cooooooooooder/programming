<?php

setcookie("style" , "light" , time() + 80) ;
setcookie("popup" , "done" , strtotime("+1 month")) ;

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// if(isset($_COOKIE["style"]))
// echo $_COOKIE["style"];


setcookie("style[color]" , "red");
setcookie("style[font]" , "Tahoma");
setcookie("style[layout]" , "boxed");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"]))
{
    echo $_COOKIE["style"]["font"];
}


















