<?php

include "connection.php";
session_start();

$user = $_SESSION["u"];
$stockId = $_POST["s"];
$qty = $_POST["q"];

//echo($stockId);
$rs = Database::search("SELECT * FROM `stock` WHERE `stock_id` = '".$stockId."'");
$num = $rs->num_rows;

if ($num > 0) {
    $d = $rs->fetch_assoc();
    $stockQty = $d["qty"];

    $rs2 = Database::search("SELECT * FROM `cart` WHERE `user_id` = '".$user["id"]."' AND `stock_stock_id` = '".$stockId."'");
    $num2 = $rs2->num_rows;

    if ($num2 > 0) {
        $d2 = $rs2->fetch_assoc();
        $newQty = $qty + $d2["cart_qty"];

        if ($stockQty >= $newQty) {
            Database::iud("UPDATE `cart` SET `cart_qty` = '".$newQty."' WHERE `cart_id` = '".$d2["cart_id"]."'");
            echo ("Cart item Updated Successfully");
        } else {
            echo ("Stock Quantity has been Exceeded!");
        }
        
    } else {
        if ($stockQty >= $qty) {
            Database::iud("INSERT INTO `cart` (`cart_qty`,`user_id`,`stock_stock_id`) VALUES ('".$qty."','".$user["id"]."','".$stockId."')");
            echo ("Cart item Added Successfully");
        } else {
            echo ("Stock Quntity has been exceeded!");
        }
        
    }
    

} else {
    echo ("Your Stock is not Found!");
}


?>