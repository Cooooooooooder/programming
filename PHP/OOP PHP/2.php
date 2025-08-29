<?php
class AppleDevice
{
    private $ram = "1 GB";
    public $inch = "5 inch";
    public $space = "32 GB";
    public $color = "Red";
    
    public function changeSpec($r ,$in ,$spa ,$colr)
    {
        $this->ram = sha1($r);
        $this->inch = $in;
        $this->space = $spa;
        $this->color = $colr;
    }
}

$iphone6 = new AppleDevice();
$iphone6 -> changeSpec("2 GB" ,"5 inch" ,"16 GB" ,"Yello");
echo "<pre>";
print_r($iphone6);
echo "</pre>";



$iphone7 = new AppleDevice();
echo "<pre>";
print_r($iphone7);
echo "</pre>";



$iphone = new AppleDevice();
echo "<pre>";
print_r($iphone);
echo "</pre>";












