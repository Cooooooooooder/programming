<?php

include('config.php');

if ( isset($_POST['update'])  ){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $IMAGE_NAME = $_FILES['image']['name'];
    $IMAGE_UP = "Images/".$IMAGE_NAME;
    $UPDATE = "UPDATE product SET name = '$NAME' , price = '$PRICE' , image = '$IMAGE_UP' WHERE id = $ID";
    mysqli_query($conf , $UPDATE);

    if(move_uploaded_file($IMAGE_LOCATION, 'Images/'.$IMAGE_NAME))
    {
        echo "<script>alert(' Image updated successfully ') </script>";
    }
    else
    {
        echo "<script>alert(' Problem Happened ') </script>";
    }
    header('location: products.php');
}

?>