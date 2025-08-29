<?php

// math functions     _ceil    _floor   _round
echo ceil(5.99)."<br>";
echo ceil(5.1)."<br>";
echo ceil(5.4)."<br>";
echo ceil(5.74)."<br>";
echo ceil(-5.52)."<br>";



echo floor(5.99)."<br>";
echo floor(5.1)."<br>";
echo floor(5.4)."<br>";
echo floor(5.74)."<br>";
echo floor(-5.52)."<br>";



echo round(5.99)."<br>";
echo round(5.1)."<br>";
echo round(5.4)."<br>";
echo round(5.74)."<br>";
echo round(-5.52)."<br>";



echo round(5.99 , 1, PHP_ROUND_HALF_DOWN)."<br>";
echo round(5.1, 1 , PHP_ROUND_HALF_DOWN)."<br>";
echo round(5.4, 1 , PHP_ROUND_HALF_DOWN)."<br>";
echo round(5.7482, 2 , PHP_ROUND_HALF_EVEN)."<br>";
echo round(-5.52, 1 , PHP_ROUND_HALF_ODD)."<br>";
