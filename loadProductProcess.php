<?php

include "connection.php";

$pageno = 0;
$page = $_POST["p"];
//echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` ORDER BY `stock`.`stock_id` ASC";
$rs = Database::search($q);
$num = $rs->num_rows;
//echo($num);

$results_per_page = 8;
$num_of_pages = ceil($num / $results_per_page);
//echo($num_of_pages); 

$page_results = ($pageno - 1) * $results_per_page;
//echo($page_results); 

$q2 = $q ." LIMIT $results_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
//echo($num2);

if ($num == 0) {
    // Not available stock
    echo ("No Product Here..");
} else {
    // Load stock
    for ($i=0; $i < $num2; $i++) { 
        $d = $rs2->fetch_assoc();
?>

<!-- card -->
<div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-5 d-flex justify-content-center">
    <div class="card" style="width: 100%;">
        <a href="singleProductView.php?s=<?php echo $d["stock_id"] ?>"><img src="<?php echo $d["path"] ?>" class="card-img-top" alt="Product Image" /></a>
        <div class="card-body">
            <h5 class="card-title"><?php echo $d["name"] ?></h5>
            <p class="card-text">Rs: <?php echo $d["price"] ?></p>
        </div>
    </div>
</div>

<?php
    }
?>

<!-- pagination -->
<div class="d-flex justify-content-center mt-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" <?php if ($pageno <= 1) { echo 'href="#"'; } else { ?>onclick="loadProduct(<?php echo ($pageno - 1) ?>);"<?php } ?>>Previous</a>
            </li>
            <?php
            for ($y= 1; $y <= $num_of_pages; $y++) { 
                if ($y == $pageno) {
            ?>
                <li class="page-item active">
                    <a class="page-link" onclick="loadProduct(<?php echo $y ?>);"><?php echo $y ?></a>
                </li>
            <?php
                } else {
            ?>
                <li class="page-item">
                    <a class="page-link" onclick="loadProduct(<?php echo $y ?>);"><?php echo $y ?></a>
                </li>
            <?php
                }
            }
            ?>
            <li class="page-item">
                <a class="page-link" <?php if ($pageno >= $num_of_pages) { echo 'href="#"'; } else { ?>onclick="loadProduct(<?php echo ($pageno + 1) ?>);"<?php } ?>>Next</a>
            </li>
        </ul>
    </nav>
</div>

<?php
}
?>
