<?php

class Iphone 
{
    public $name;
    public $ram;

    public function sayHello()
    {
        echo "Hello User";
    }

    public function __construct($n ,$r)
    {
        $this -> name = $n;
        $this -> ram = $r;
        echo "Object is created The name is " . $n ."<br>";
        echo "Your device has ".$r . " ram" ."<br>";
    }
}

class Sony extends Iphone
{

}
$iphone = new Iphone("Hamada" , 80);
echo "<br>";
$sony = new Sony("Barakat" , 164);
