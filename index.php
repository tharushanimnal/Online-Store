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
    <title>HEXASHOP</title>
</head>
<body onload="loadProduct(0);" class="index">
    

    <?php include "navBar.php" ?>

    <!-- basic search -->
    <div class="container mt-5">
    <div class="row justify-content-end">
        <div class="col-lg-3 col-md-4 col-sm-6 mt-3">
            <input type="text" class="form-control" placeholder="Product Name" id="product" onkeyup="searchProduct(0)">
        </div>
        <div class="col-auto mt-3">
            <button class="btn btn-outline-info" onclick="viewFilter();">Filters</button>
        </div>
    </div>
</div>


    <!-- basic search -->

    <!-- Advanced search -->
    <div class="d-none" id="filterId">
    <div class="border border-light rounded-4 mt-4 p-5 col-12 col-md-10 offset-md-1 position-relative">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" aria-label="Close" onclick="closeFilter();"></button>
        <div class="row">   
            <div class="col-12 col-md-6 mb-3">
                <div class="row">
                    <label class="col-3 form-label">Color :</label>
                    <div class="col-9">
                        <select class="form-select bg-dark" id="color">
                            <option value="0">Select Color</option>
                            <?php
                            $rs = Database::search("SELECT * FROM `color`");
                            $num = $rs->num_rows;
                            for ($i=0; $i < $num; $i++) { 
                                $d = $rs->fetch_assoc();
                            ?>
                            <option value="<?php echo $d["color_id"] ?>"><?php echo $d["color_name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="row">
                    <label class="col-3 form-label">Category :</label>
                    <div class="col-9">
                        <select class="form-select bg-dark" id="cat">
                            <option value="0">Select Category</option>
                            <?php
                            $rs2 = Database::search("SELECT * FROM `category`");
                            $num2 = $rs2->num_rows;
                            for ($i=0; $i < $num2; $i++) { 
                                $d2 = $rs2->fetch_assoc();
                            ?>
                            <option value="<?php echo $d2["cat_id"] ?>"><?php echo $d2["cat_name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">   
            <div class="col-12 col-md-6 mb-3">
                <div class="row">
                    <label class="col-3 form-label">Brand :</label>
                    <div class="col-9">
                        <select class="form-select bg-dark" id="brand">
                            <option value="0">Select Brand</option>
                            <?php
                            $rs3 = Database::search("SELECT * FROM `brand`");
                            $num3 = $rs3->num_rows;
                            for ($i=0; $i < $num3; $i++) { 
                                $d3 = $rs3->fetch_assoc();
                            ?>
                            <option value="<?php echo $d3["brand_id"] ?>"><?php echo $d3["brand_name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="row">
                    <label class="col-3 form-label">Size :</label>
                    <div class="col-9">
                        <select class="form-select bg-dark" id="size">
                            <option value="0">Select Size</option>
                            <?php
                            $rs4 = Database::search("SELECT * FROM `size`");
                            $num4 = $rs4->num_rows;
                            for ($i=0; $i < $num4; $i++) { 
                                $d4 = $rs4->fetch_assoc();
                            ?>
                            <option value="<?php echo $d4["size_id"] ?>"><?php echo $d4["size_name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-md-5 mb-3">
                <input type="text" class="form-control" placeholder="Min Price" id="min"/>
            </div>
            <div class="col-12 col-md-5 mb-3">
                <input type="text" class="form-control" placeholder="Max Price" id="max"/>
            </div>
            <div class="col-12 col-md-2">
                <button class="btn btn-outline-light w-100" onclick="advSearchProduct(0);">Search</button>
            </div>
        </div>
    </div>
</div>

<script>
function closeFilter() {
    document.getElementById("filterId").classList.add("d-none");
}
</script>


    <!-- Advanced search -->

    <!-- load Prduct -->

    <div class="row col-10 offset-1" id="pid">

    

    </div>
    <!-- load Prduct -->


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