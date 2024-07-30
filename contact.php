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

<style>
    .section-heading {
        margin-bottom: 20px;
    }
    .section-heading h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .section-heading span {
        font-size: 14px;
        color: #888;
    }
    .form-control {
        border-radius: 0;
        box-shadow: none;
        border: 1px solid #ddd;
    }
    .btn {
        border-radius: 0;
    }
</style>
    <title>HEXASHOP</title>
</head>
<body onload="loadProduct(0);" class="index">
    

    <?php include "navBar.php" ?>

<div class="contact-us text-white mt-5">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6895989609566!2d80.21335797464914!3d6.037263928623444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173f4da1e9757%3A0x38c5d7e9e899cd7a!2sLady%20Stylez!5e0!3m2!1sen!2slk!4v1722169327339!5m2!1sen!2slk" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading mb-4 text-white">
                    <h2>Say Hello. Don't Be Shy!</h2>
                    <p><i>Details to details is what makes Hexashop different from the other themes.</i></p>
                </div>
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your name" class="form-control" required="" style="background-color: #2c2c2c; color: white;">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <fieldset>
                                <input name="email" type="text" id="email" placeholder="Your email" class="form-control" required="" style="background-color:#2c2c2c; color: white;">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your message" class="form-control" required="" style="background-color:#2c2c2c; color: white;"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading mb-4 text-white">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <p><i>Details to details is what makes Hexashop different from the other themes.</i></p>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5 mb-3">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name" class="form-control" required="" style="background-color: #2c2c2c; color: white;">
                            </fieldset>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" class="form-control" required="" style="background-color: #2c2c2c; color: white;">
                            </fieldset>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <fieldset>
                                <button type="submit" id="form-submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Subscribe</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
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