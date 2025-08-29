<?php

class AppleDevice
{
    protected $ram = "1 GB";
    protected $inch = "5 inch";
    protected $space = "32 GB";
    protected $color = "Red";
    protected $screen = "LcD";
    
    public function changeSpec($r ,$in ,$spa ,$colr ,$scr)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->space = $spa;
        $this->color = $colr;
        $this->screen = $scr;
    }
}

$iphone6 = new AppleDevice();
$iphone6 -> changeSpec("2 GB" ,"5 inch" ,"16 GB" ,"Yello" ,"io");
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
}

$sony1 = new SonyDevice();
$sony1 -> changeSpec2("9 GB" ,"7 inch" ,"64 GB" ,"Blue" ,"108 mlpexel" ,"ir");
echo "<pre>";
print_r($sony1);
echo "</pre>";