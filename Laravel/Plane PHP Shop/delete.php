<?php

include('config.php');
$ID = $_GET['id'];
mysqli_query($conf,"DELETE FROM product WHERE id=$ID");
header('location: products.php');
?>