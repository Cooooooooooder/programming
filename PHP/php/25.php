<?php

session_start();

// $_SESSION["name"] = "Elzero";
// session_unset();
// session_destroy();

if($_SERVER["REQUEST_METHOD"]=== "POST")
{
    if($_POST['username'] == "Osama")
    {
        $_SESSION['user'] = "Elzero";
        $_SESSION['id'] = 88;
    }
}


echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if(isset($_SESSION['user']))
{
    echo "Welcome " . $_SESSION['user'];
}
else
{
    
?>

<form action="" method="POST">
    <input type="text" name="username">
    <input type="submit" value="login">
</form>

<?php } ?>
<br>

<a href="test.php" > logout </a>












