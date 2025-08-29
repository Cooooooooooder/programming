<?php

// conflict between the same method in two traits

trait MyFeature1
{
    public function feature()
    {
        echo "Function from Feature 1 <br>";
    }
}

trait MyFeature2
{
    public function feature()
    {
        echo "Function from Feature 2 <br>";
    }
}

class Iphone
{
    use MyFeature1, MyFeature2
    {
        MyFeature2::feature as iilliiooss;
        MyFeature1::feature insteadof MyFeature2;
    }
}

$iphone = new Iphone();

$iphone -> feature();
$iphone -> iilliiooss();