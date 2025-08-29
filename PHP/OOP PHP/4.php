<?php

// final class AppleDevice
class AppleDevice
{
    protected $ram = "1 GB";
    protected $inch = "5 inch";
    protected $space = "32 GB";
    protected $color = "Red";
    protected $screen = "LcD";
    protected $name;
    public function changeSpec($r ,$in ,$spa ,$colr ,$scr)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->space = $spa;
        $this->color = $colr;
        $this->screen = $scr;
    }

    final public function sayHello($n)
    {
        $this -> name = $n;
        echo "Welcome to " . $n ;
    }
}

$iphone6 = new AppleDevice();
$iphone6 -> sayHello("Iphone 6");
$iphone6 -> changeSpec("2 GB" ,"5 inch" ,"16 GB" ,"Yello" ,"io");
$iphone6 -> price = "$400";
echo "<pre>";
print_r($iphone6);
echo "</pre>";

class SonyDevice extends AppleDevice
{
    private $camera = "8 mlpexel";

    public function changeSpec2($r ,$in ,$spa ,$colr ,$cam ,$scr)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->space = $spa;
        $this->color = $colr;
        $this->camera = $cam;
        $this->screen = $scr;
    }

    //  public function sayHello($n)
    // {
    //     $this -> name = $n;
    //     echo "Welcome to " . $n . " The ram is " . $this -> ram;
    // }
}

$sony1 = new SonyDevice();
$sony1 -> sayHello("Sony");
$sony1 -> changeSpec2("9 GB" ,"7 inch" ,"64 GB" ,"Blue" ,"108 mlpexel" ,"ir");
$sony1 -> price = "$900";
echo "<pre>";
print_r($sony1);
echo "</pre>";


