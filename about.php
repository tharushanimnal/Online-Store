<?php

include "connection.php"

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


</style>
    <title>HEXASHOP</title>
</head>
<body onload="loadProduct(0);" class="index">
    

    <?php include "navBar.php" ?>

<!-- ***** About Us Area Starts ***** -->
<div class="about-us py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="left-image">
                    <img src="Resources/productImg/women-01.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content text-white col-12">
                    <h4>About Us</h4>
                    <span>Welcome to HexaShop, where fashion meets elegance. Nestled in the heart of Galle, our boutique is dedicated to providing the latest trends in clothing, ensuring every customer steps out in style.</span>
                    <div class="quote mt-3 mb-4 text-white">
                        <i class="fa fa-quote-left"></i><p>At HexaShop, we believe in the power of fashion to express individuality and boost confidence. Our curated collections are thoughtfully selected to cater to diverse tastes, offering everything from chic casual wear to stunning evening attire. </p>
                    </div>
                    <p>We pride ourselves on exceptional customer service and a seamless shopping experience, both online and in-store. Join us on a journey of style, quality, and affordability. <br>Thank you for choosing Hexashop—your destination for all things fashion.</p>
                    <ul class="list-inline mt-4">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** About Us Area Ends ***** -->


    <!-- Footer -->
  <footer>
    <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logof">
                        <img src="Resources/white-logo.png" alt="hexashop">
                        </div>
                        <ul>
                            <li><a href="#">48,Wakwella rd,Galle</a></li>
                            <li><a href="#">info@hexashop.lk</a></li>
                            <li><a href="#">091-2229959</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 Hexashop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="mailto:tharushanimnal@gmail.com" target="_parent">Tharusha Nimnal</a>

                        </p>
                        <ul>
                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 </footer>
    <!-- Footer -->


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>