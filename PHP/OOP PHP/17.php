<?php

spl_autoload_register
    (
        function ($class)
            {
                require "classes/" . $class . ".class.php";
            }  
    );

$var = new Testing4();
print_r($var);

