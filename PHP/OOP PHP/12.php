<?php

// static keyword

class Iphone
{
    public static $name = "Osama";
    public  static  $ram = "2 GB";

    public  static function sayHello()
    {
        // $this -> name ;
        return "Hello";
    }
}

// $phone = new Iphone();
// echo $phone -> name . "<br>" ;
// echo $phone -> ram . "<br>";
// echo $phone -> sayHello() . "<br>";

echo Iphone::$name. "<br>"; 
echo Iphone::$ram. "<br>";
echo Iphone::sayHello(). "<br>";