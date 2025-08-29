<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nata+Sans:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <center> 
        <div class="main">
            <form action="insert.php" method="POST" enctype = "multipart/form-data">
            <h2> Shop Online </h2>   
            <img src="\onlineShop\Images\main.jpg" alt="logo" width="400px">
            <br>
            <input type="text" name="name" placeholder="Product Name">
            <br>
            <input type="text" name="price" placeholder="Product Price">
            <br>
            <input type="file" id="file" name="image" style="display:none"  >
            <label for="file"> Upload Image </label>
            <button name="upload"> Add Product </button>
            <br>
            <br>
             <a href="products.php"> Show All Products</a>

            </form>
        </div>
        <br>
       
    </center>
</body>
</html>