<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <title>DEMO SHOP</title>
</head>

<body>
    <header class="mb-5" style="position: -webkit-sticky; position: sticky; top: 0;">
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="./all-products-page.php"> DEMO SHOP </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Brands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav" style="list-style-type:none; padding-left: 750px;">
                        <li>
                        <a class="nav-item" href="#"><img src="./public/theme/img/shopping-cart-removebg-preview.png" width="35" height="35"></a>
                        </li>
                        <li class="nav-item" style="color:Red; text-align:center; vertical-align: super; background-color:aliceblue; border-radius: 70%; width: 20px; height: 20px;">
                         <?php 
                         $x=[];
                         $x = count(addToCart($x));
                         echo $x; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>