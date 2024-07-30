<?php

include "connection.php";
$stockId = $_GET["s"];

//echo($stockId);

if (isset($stockId)) {

    $q = "SELECT * FROM `stock` INNER JOIN  `product` ON `stock`.`product_id` = `product`.`id`
    INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id`
    INNER JOIN `category` ON `product`.`category_id` = `category`.`cat_id`
    INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id`
    WHERE `stock`.`stock_id` = '".$stockId."'";

    $rs = Database::search($q);
    $d = $rs->fetch_assoc();
    
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background: url('Resources/img/red.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .profile img {
            max-width: 100%;
        }
    </style>
    <title>HEXASHOP</title>
</head>

<body>
    <!-- navbar -->
    <?php include "navBar.php" ?>
    <!-- navbar -->
    <div class="container profile mt-5 text-white">
        <div class="row shadow-lg p-5 bg-body-tertiary rounded-2 m-auto">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <img src="<?php echo $d["path"]?>" class="rounded-3 shadow-lg" alt="Product Image" />
            </div>
            <div class="col-12 col-md-6">
                <h3 class="text-info"><?php echo $d["name"] ?></h3>
                <h5 class="mt-3">Brand: <?php echo $d["brand_name"] ?></h5>
                <h6 class="mt-3">Category: <?php echo $d["cat_name"] ?></h6>
                <h6 class="mt-3">Color: <?php echo $d["color_name"] ?></h6>
                <h6 class="mt-3">Size: <?php echo $d["size_name"] ?></h6>
                <p class="mt-3">Description: <?php echo $d["description"] ?></p>
                <div class="row mt-5">
                    <div class="col-12 col-md-2">
                        <input type="text" placeholder="Qty" class="form-control" id="qty"/>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mt-md-0">
                        <h6 class="text-warning">Available Quantity: <?php echo $d["qty"]?></h6>
                    </div>
                    <div class="col-12">
                        <h5 class="mt-3">Price: <?php echo $d["price"]?></h5>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-primary col-5 col-md-4" onclick="addtoCart('<?php echo $d['stock_id'] ?>');">Add To Cart</button>
                            <button class="btn btn-outline-warning col-5 col-md-4 ms-2" onclick="buyNow('<?php echo $d['stock_id'] ?>');">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="col-12 mt-3 text-white text-center">
        <p>&copy; 2024 HEXASHOP.lk || All Right Reserved</p>
    </div>
    <!-- Footer -->
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php
} else {
    header("location: index.php");
}
?>
