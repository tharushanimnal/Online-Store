<?php

session_start();
$user = $_SESSION["u"];
include "connection.php";

if (isset($user)) {
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <title>HEXASHOP - Order History</title>
</head>

<body class="index">

    <?php include "navBar.php" ?>


    <div class="container mt-5">
        <div class="row">

            <?php
            $rs = Database::search("SELECT * FROM `order_history` WHERE `user_id` = '".$user["id"]."'");
            $num = $rs->num_rows;

            if ($num > 0) {
                // not empty
                ?>
                
                    <div class="mt-5 mb-3">
                        <h3>Order History</h3>
                    </div>

                    <?php
                    for ($i = 0; $i < $num; $i++) { 
                        $d = $rs->fetch_assoc();
                        ?>

                        <!-- Order history card -->
                    <div class="p-3 border border-3 rounded-3 bg-body-secondary mb-4">
                        <div>
                            <h5>Order ID <span class="text-info">#<?php echo $d["order_id"]?></span></h5>
                            <p><?php echo $d["order_date"]?></p>
                        </div>

                        <div class="ps-5 pe-5">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rs2 = Database::search("SELECT * FROM `order_item` INNER JOIN `stock` ON
                                    `order_item`.`stock_stock_id` = `stock`.`stock_id` INNER JOIN `product`
                                    ON `stock`.`product_id` = `product`.`id` WHERE `order_item`.`order_history_ohid` = '".$d["ohid"]."'");

                                $num2 = $rs2->num_rows;

                                for ($x=0; $x < $num2; $x++) { 
                                    $d2 = $rs2->fetch_assoc();
                                }
                                
                                ?>
                                <tr>
                                <td><?php echo $d2["name"] ?></td>
                                <td><?php echo $d2["oi_qty"] ?></td>
                                <td><?php echo ($d2["price"] * $d2["oi_qty"])?></td>
                            
                                </tr>
                                
                            
                            </tbody>
                            
                        </table>
                        </div>

                        <div class="d-flex flex-column align-items-end pe-5">
                            <h6>Delivary fee: <span class="text-muted">500</span></h6>
                            <h4>Net Total: <span class="text-warning"><td><?php echo $d["amount"]?></td></span> </h4>
                        </div>
                    </div>
                    <!-- Order history card -->

                        <?php
                    }
                    
                    
                    ?>


                    
                
                <?php
            } else {
                // empty
            ?>
                <div class="col-12 text-center mt-5">
                    <h2>You Have Not Placed Any Order ! </h2>
                    <a href="index.php" class="btn btn-primary">Start Shopping</a>
                </div>
            <?php
            }
            
            
            ?> 

        </div>
    </div>

    <!-- Footer -->
    <div class="col-12 mt-3 text-white font-weight-bold text-center">
        <p>&copy; 2024 HEXASHOP.lk || All Right Reserved</p>
    </div>
    <!-- Footer -->
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php



} else {
    header("location: signIn.php");
}


?>