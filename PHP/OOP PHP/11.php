<?php
 //  clone function 
class Iphone
{
    public $name;
    public $email;

    public function __construct($n ,$e)
    {
        $this -> name = $n;
        $this -> email = $e;
    }
    /* public function __clone()
    {
        $this -> name = clone $this -> name;
    } */
}

$main = new Iphone("Ahmoksha" ,"O@O.com");
$copy = clone $main;
$copy -> name = "Amr";
// $copy -> name = "Taha";

echo "<pre>"; print_r($main); echo "</pre>";
echo "<pre>"; print_r($copy); echo "</pre>";

