<?php

include('config.php');

if ( isset($_POST['upload'])  ){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $IMAGE_NAME = $_FILES['image']['name'];
    $IMAGE_UP = "Images/".$IMAGE_NAME;
    $INSERT = "INSERT INTO product (name , price, image) VALUE ('$NAME' , '$PRICE', '$IMAGE_UP')";
    mysqli_query($conf , $INSERT);
    if(move_uploaded_file($IMAGE_LOCATION, 'Images/'.$IMAGE_NAME))
    {
        echo "<script>alert(' Image uploaded successfully ') </script>";
    }
    else
    {
        echo "<script>alert(' Problem Happened ') </script>";
    }
    header('location: index.php');
}

?>