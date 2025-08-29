<?php

interface Mobile
{
    public function pressHome();
}

class Iphone implements Mobile
{
    public $name;

    public function pressHome()
    {
        echo "You Will See Opened Applications";
    }
}


class Sony implements Mobile
{
    public $name;

    public function pressHome()
    {
        echo "You Will Close Applications";
    }
}

$iphone1 = new Iphone();
$iphone1 -> pressHome();
echo "<pre>"; print_r($iphone1);  echo "</pre>";

$sony1 = new Sony();
$sony1 -> pressHome();
echo "<pre>"; print_r($sony1);  echo "</pre>";



