<?php

include "connection.php";

$productId = $_POST["p"];
$qty = $_POST["q"];
$price = $_POST["up"];

//echo($productId);

if (empty($qty)) {
    echo ("Plese Enter Qty");
} else if (!is_numeric($qty)) {
    echo ("Only numbers csn be entered for Qty");
} else if (strlen($qty) > 10) {
    echo ("You Qty Should be less than 10 Charactors");
} else if (empty($price)) {
    echo ("Plese Enter price");
} else if (!is_numeric($price)) {
echo ("Only numbers csn be entered for price");
} else if (strlen($price) > 10) {
    echo ("Tou price Should be less than 10 Charactors");
} else {

    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id`='".$productId."' AND `price`='".$price."'");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if ($num == 1) {
        
        $newQty = $d["qty"] + $qty;
        Database::iud("UPDATE `stock` SET `qty` = '".$newQty."' WHERE `stock_id` = '".$d["stock_id"]."'");
        echo ("Stock Updated Successfully");

    } else {
        Database::iud("INSERT INTO `stock` (`price`,`qty`,`product_id`) VALUES ('".$price."','".$qty."','".$productId."')");
        echo ("New Stock added Successfully");
    }
}


?>