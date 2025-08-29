<?php

abstract class MakeDevice
{
    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($name);
}

class Iphone extends MakeDevice
{
    public $owner;
    public function testPerformance()
    {
        echo "Performance is 100%";
    }
    public function verifyOwner()
    {
        echo "Owner is Verified";
    }
    public function sayWelcome($s)
    {
        echo "Welcome User " . $s ;
        $this -> owner = $s;
    }
}
class Ipad extends MakeDevice
{
    public $owner;
    public function testPerformance()
    {
        echo "Performance is 100%";
    }
    public function verifyOwner()
    {
        echo "Owner is Verified";
    }
    public function sayWelcome($r)
    {
        echo "Welcome User " . $r;
        $this -> owner = $r;
    }
}

$iphone1 = new Iphone();
$iphone1 -> sayWelcome("Mohammed");
echo "<pre>"; print_r($iphone1); echo "</pre>";


$ipad1 = new Iphone();
$ipad1 -> sayWelcome("Mariam");
echo "<pre>"; print_r($ipad1); echo "</pre>";

