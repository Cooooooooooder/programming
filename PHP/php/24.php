<?php

// session introduction 
// session_id("kfdw88243");
// session_start();
$_SESSION["name"] = "Ahmed";
$_SESSION["id"] = 888;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<a href='test.php'> Test </a>";

echo "<br>";
echo SESSION_id();
echo "<br>";

isset($_SESSION["views"])? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Your name is : " . $_SESSION["name"] . " Views Count is " . $_SESSION['views'] ;








