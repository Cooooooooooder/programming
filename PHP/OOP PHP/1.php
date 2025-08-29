<?php

class AppleDevice
{
    public $ram = "1 GB";
    public $inch = "5 inch";
    public $space = "32 GB";
    public $color = "Red";
    const OWNERNAME = 5;    
    public function setOwnerName($Owner)
    {
        if ( strlen($Owner) < self::OWNERNAME )
        {
            echo "Owner Name is less than " .self::OWNERNAME . "  characters";
        }
    }

    public function doubleHomePressed()
    {
        echo "You have Pressed The Home Button Twice";
    }

    public function getSpecifications()
    {
        echo "This iphone Ram is : " . $this->ram;
        echo "<br>";
        echo "This iphone Size inch is : " . $this->inch;
    }

}

$iphone6 = new AppleDevice();
$iphone6->ram = "2 GB";
$iphone6->inch = "4 inch";
$iphone6->space = "164 GB";
$iphone6->color = "blue";
$iphone6->doubleHomePressed("OS");
echo "<br>";
$iphone6->getSpecifications();
echo "<br>";
$iphone6->setOwnerName("Os");

echo "<pre>";
print_r($iphone6);
echo "</pre>";

$iphone7 = new AppleDevice();
$iphone7->ram = "4 GB";
$iphone7->inch = "5.5 inch";
$iphone7->space = "256 GB";
$iphone7->color = "White";
$iphone7->doubleHomePressed();
echo "<br>";
$iphone7->getSpecifications();
echo "<br>";
$iphone7->setOwnerName("i");

echo "<pre>";
print_r($iphone7);

echo "</pre>";



$iphone = new AppleDevice();
$iphone->ram ;
$iphone->inch ;
$iphone->space ;
$iphone->color;
$iphone->doubleHomePressed();
echo "<br>";
$iphone->getSpecifications();
echo "<br>";
$iphone->setOwnerName("rr");

echo "<pre>";
print_r($iphone);

echo "</pre>";
