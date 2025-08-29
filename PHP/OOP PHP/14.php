<?php

// traits 

trait FingerPrint
{
    public function fingerFeature()
    {
        echo "This Is Finger Print Feature <br>";
        return $this;
    }
}
trait FaceDetect
{
    public function faceFeature()
    {
        echo "This Is face Detect Feature <br>";
        return $this;
    }
}
trait TreeDDimentionTouch
{
    public function ThreeD()
    {
        echo "This Is ThreeD Touch Feature <br>";
        return $this;
    }
}
trait AllFeatures
{
    use FingerPrint ,FaceDetect ,TreeDDimentionTouch;
}
class Iphone 
{
    public $user;
    public $email;

    use AllFeatures;
}

$iphone1 = new Iphone();
$iphone1 -> fingerFeature() -> faceFeature() -> ThreeD(); 
echo "<pre>"; print_r($iphone1); echo "</pre>";

// ---------------------------------------------------------------------

// preiority between trait or class 

trait MyFeature
{
    public function sayHello()
    {
        echo "Hello From Trait";
    }
}
class AppleDevice
{
    public function sayHello()
    {
        echo "Hello From Class";
    }
}
class Iphonee extends AppleDevice
{
    use MyFeature;
}
$iphone2 = new Iphonee();
$iphone2 -> sayHello();