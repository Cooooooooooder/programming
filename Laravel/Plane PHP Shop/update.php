<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="index2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nata+Sans:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>

    </style>
</head>
<body>
   <?php
    include('config.php');
    $ID = $_GET['id'];
    $UP = mysqli_query($conf , "select * from product where id = $ID");
    $DATA = mysqli_fetch_array($UP);
    

                
        
    ?> 
   <center> 
                <div class='main'>
                    <form action='up.php' method='POST' enctype = 'multipart/form-data'>
                    <h2> Update Product </h2>  
                    <img src="/onlineShop/<?php echo $DATA['image']; ?>" alt="logo" width="400px">
                    <br>
                    <input type='hidden' name='id' placeholder='Product Id'  value='<?php echo $DATA['id'] ?>'>
                    <br>
                    <input type='text' name='name' placeholder='Product Name' value='<?php echo $DATA['name'] ?>'>
                    <br>
                    <input type='text' name='price' placeholder='Product Price' value='<?php echo $DATA['price'] ?>'>
                    <br>
                    <input type="file" id="file" name="image" style="display:none"  >
                    <label for='file'> Edit Image </label>
                    <button name='update' type='submit'> Update Product </button>
                    <br>
                    <br>
                    </form>
                </div>
                <br>
            
            </center>
</body>
</html>