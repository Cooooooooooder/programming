<?php 

// echo $_GET["num"];

echo filter_input(INPUT_GET, "num" , FILTER_SANITIZE_NUMBER_INT);

?>

<form action="" method="GET">
<input type="text" name="num">
<input type="submit" name="Send">
</form>