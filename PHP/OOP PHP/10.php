<?php

class Iphone
{
    private $name;
    private $ram;
     public function __set($prop , $val)
    {
        echo "The Proprerty [ " . $prop. " ] is Not Found or Not Accessible  <br>";
        echo "The value is [ " . $val. " ] <br> " ;
    }
    public function __get($prop)
    {
        echo "The Proprerty [ " . $prop. " ] is Not Found or Not Accessible  <br>";
    }
   
}

$phone = new Iphone();
echo $phone -> color ;
echo $phone -> size ;
echo $phone -> length = "170 inch";
echo "<pre>"; print_r($phone); echo "</pre>";
