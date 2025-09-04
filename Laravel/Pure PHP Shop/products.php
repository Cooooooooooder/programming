<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nata+Sans:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        h3 {
            font-family: "Noto Sans", sans-serif;
            font-weight: bold;
            margin: 25px;
            margin-bottom: 5px;
        }
        .card{
            float:right;
            margin-right:35px;
            margin-top:20px;
            margin-left:20px;
            margin-bottom: 5px;
        }
        .card img{
            width: 100%;
            height: 150px;
        }
        main{
            width: 70%;
        }
    </style>
</head>
<body>
    <center> <h3>All Products </h3> </center>
    <?php
        include('config.php');  
        $result = mysqli_query($conf, "SELECT * FROM product");
        while($row = mysqli_fetch_array($result))
        {
            echo "
            <center> 
               <main>
                    <div class='card' style='width: 16rem;'>
                        <img src='$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[price]</p>

                        

                            <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a>


                            <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit</a>
                        </div>
                    </div>
                </main>
            </center>";
        }

    ?>

   
</body>
</html>