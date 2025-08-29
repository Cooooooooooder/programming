<?php

function add($n1 , $n2)
{
    return ($n1 > $n2) ? "$n1" : "$n2"  ;
}

$nums = [10 , 20 , 30 , 40 , 50];

echo array_reduce($nums , "add");