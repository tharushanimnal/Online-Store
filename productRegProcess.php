<?php

include "connection.php";

$product = $_POST["p"];
$brand = $_POST["b"];
$category = $_POST["c"];
$color = $_POST["co"];
$size = $_POST["s"];
$description = $_POST["d"];

if (empty($product)) {
    echo ("Please Enter Your Product Name");
} else if (empty($description)) {
    echo ("Please Enter Your Product Description");
} else if (empty($_FILES["i"])) {
    echo ("Please Upload Your Product Image");
} else {
    echo ("Success");

    $rs = Database::search("SELECT * FROM `product` WHERE `name` = '".$product."'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Product Name Is Allready Exsits");
    } else {
        $path = "Resources/product//" . uniqid() . ".png";
        move_uploaded_file($_FILES["i"]["tmp_name"], $path);

        Database::iud("INSERT INTO `product` (`name`,`description`,`path`,`brand_id`,`category_id`,`color_id`,`size_id`)
        VALUES ('".$product."','".$description."','".$path."','".$brand."','".$caregory."','".$color."','".$size."')");

        echo ("Success");
    }
    
}

?>