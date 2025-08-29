<?php

class Iphone
{
    public $name;
    public $ram;

    public function welcomeToMobile($n ,$r)
    {
        $this -> name = $n;
        $this -> ram = $r;
        echo "Welcome " . $n . " Your phone has " . $r . " GB ram .<br>";
    }
    private function sayHello()
    {
        echo "Function sayHello";
    }
    public function __call($method ,$params)
    {
        echo "Function Not Found";
    }
}


$iphone1 = new Iphone();
$iphone1 -> welcomeToMobile("Shawgy" ,"8");
$iphone1 -> sayHello();
echo "<pre>"; print_r($iphone1); echo "</pre>";