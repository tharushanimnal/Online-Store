<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {
    $rs = Database::search("SELECT * FROM `order_item` INNER JOIN `stock` ON
    `order_item`.`stock_stock_id` = `stock`.`stock_id` INNER JOIN `product`
    ON `stock`.`product_id` = `product`.`id`
    INNER JOIN `order_history` ON `order_item`.`order_history_ohid` = `order_history`.`ohid`
    INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id`
    INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id`");

    $num = $rs->num_rows;

    ?>
    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Product Report</title>
</head>

<body>
<div class="container mt-3">
        <a href="adminReport.php"> <img src="Resources/img/Image20240528131628.png" height="25"/></a>
    </div>

    <div class="container mt-3">
        <h2 class="text-center">Sale Report</h2>
        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Brand</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Order Date</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i=0; $i < $num; $i++) { 
                    $d = $rs->fetch_assoc();
                
                ?>
                <tr>
                    <td><?php echo $d["order_id"] ?></td>
                    <td><?php echo $d["name"] ?></td>
                    <td><?php echo $d["oi_qty"] ?></td>
                    <td><?php echo $d["brand_name"] ?></td>
                    <td><?php echo $d["color_name"] ?></td>
                    <td><?php echo $d["size_name"] ?></td>
                    <td><?php echo $d["price"] ?></td>
                    <td><?php echo $d["order_date"] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end container mt-5 mb-5">
        <button class="btn-btn-outline-dark col-2" onclick="window.print()">Print</button>
    </div>
    

    
</body>
</html>

<?php
} else {
    echo ("You are not a Valid Admin");
}

?>

