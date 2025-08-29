<?php

// Chain Methods

class Iphone
{
    public $name;
    public $email;

    public function pressPower()
    {
        echo "You Have Pressed The Power Button <br>";
        return $this;
    }
    public function bootPhone()
    {
        echo "The Phone is Booting Now ... <br>";
        return $this;
    }
    public function sayWelcome()
    {
        echo "Welcome To Phone .. <br>";
        return $this;
    }
}

$iphone1 = new Iphone();
// $iphone1 -> pressPower();
// $iphone1 -> bootPhone();
// $iphone1 -> sayWelcome();

$iphone1 -> pressPower() -> bootPhone() -> sayWelcome();

