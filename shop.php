<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylep.css">

</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fal fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fal fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="page-header">
        <style>
            #page-header {
                background-image: url(img/banner/b1.jpg);
                width: 100%;
                height: 40vh;
                background-size: cover;
                display: flex;
                justify-content: center;
                text-align: center;
                flex-direction: column;
                padding: 14px;
            }
        </style>
        <h2>#Meow</h2>
        <p>Save more with cupons & up to 70% off! </p>
    </section>
    <section id="container-5">
        <div id="cont">
            <div class="row">

                <?php
                require 'admin/Database.php';


                $query = "SELECT * FROM menu";
                $query_run = mysqli_query($connection, $query);
                $check_menu = mysqli_num_rows($query_run) > 0;

                if ($check_menu) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>
                        <div class="col-sm">
                            <div class="card-body">
                                <img src="img/products/f1.jpg" <?php echo $row['menu_image']; ?> class="card-img-top" alt="Product Images">
                                <h4 class="card-title"><?php echo $row['menu_title']; ?></h4>
                                <h3 class="card-title"><?php echo $row['menu_body']; ?></h3>
                                <p class="card-text">
                                    <?php echo $row['id']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card-body">
                                <img src="img/products/f2.jpg" <?php echo $row['menu_image']; ?> class="card-img-top" alt="Product Images">
                                <h4 class="card-title"><?php echo $row['menu_title']; ?></h4>
                                <h3 class="card-title"><?php echo $row['menu_body']; ?></h3>
                                <p class="card-text">
                                    <?php echo $row['id']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card-body">
                                <img src="img/products/f3.jpg" <?php echo $row['menu_image']; ?> class="card-img-top" alt="Product Images">
                                <h4 class="card-title"><?php echo $row['menu_title']; ?></h4>
                                <h3 class="card-title"><?php echo $row['menu_body']; ?></h3>
                                <p class="card-text">
                                    <?php echo $row['id']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card-body">
                                <img src="img/products/f4.jpg" <?php echo $row['menu_image']; ?> class="card-img-top" alt="Product Images">
                                <h4 class="card-title"><?php echo $row['menu_title']; ?></h4>
                                <h3 class="card-title"><?php echo $row['menu_body']; ?></h3>
                                <p class="card-text">
                                    <?php echo $row['id']; ?>
                                </p>
                            </div>
                        </div>


                <?php

                    }
                } else {
                    echo "NO Products Found";
                }

                ?>

            </div>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img src="img/logo.png" class="logo">
            <h4>Contact</h4>
            <p><strong>Adress:</strong> Lipjan, Vushtrri, Kosove</p>
            <p><strong>Phone:</strong> 049000000 </p>
            <p><strong>Hours:</strong> 09:00 - 16:00</p>

        </div>

        <div class="col">
            <h4>About </h4>
            <a href="#">About us</a>
            <a href="#">Delivery information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account </h4>
            <a href="#">Sign in</a>
            <a href="#">View cart</a>
            <a href="#">Wishlist</a>
            <a href="#">Track my order</a>
            <a href="#">Help</a>
        </div>

        <div class="col">
            <p>Secure Payment Gateways</p>
            <img src="img/pay/pay.png">
        </div>

        <div class="copyright">
            <p>Ⓒ 2022 All rights reserved. Developed by Muhamet & Yllka</p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>

</html>