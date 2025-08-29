<?php

//date and time functions 

date_default_timezone_set("Africa/Cairo");

$d = date_create();

date_add($d , date_interval_create_from_date_string("1 year 2 months 4 days 8 hours 9 minutes "));
date_sub($d , date_interval_create_from_date_string("1 year 2 months 4 days 8 hours 9 minutes "));
date_modify($d , "+20 months");
echo date_format($d , "Y-m-d   --  H/i/sa ");
echo "<br>";
echo time()  .  "<br>";

echo time() / 60 . "minutes <br>";
echo (int)(time() / 60 / 60 / 24 / 365 ). "years <br>";

echo "<pre>";
print_r(getdate());
echo "</pre>";



echo "<pre>";
print_r(date_parse("1985-10-25 12:25:15 UTC"));
echo "</pre>";

















