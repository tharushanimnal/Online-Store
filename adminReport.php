<?php

session_start();


if (isset($_SESSION["a"])) {

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>HEXASHOP - Admin Dashboard</title>
</head>
<body class="adminBody">


    <?php include "adminNavBar.php"; ?>

    <div class="col-10">
        <h2 class="text-center">Reports</h2>

        <div class="row mt-5">
            <div class="col-4 mt-5">
            <a href="adminReportStock.php"><button class="btn btn-info col-12">Stock Reports</button></a>
            </div>

            <div class="col-4 mt-5">
            <a href="adminReportProduct.php"><button class="btn btn-info col-12">Product Reports</button></a>
            </div>

            <div class="col-4 mt-5">
            <a href="adminReportUser.php"><button class="btn btn-info col-12">User Reports</button></a>
            </div>

            <div class="col-4 mt-5">
            <a href="adminReportSale.php"><button class="btn btn-info col-12">Sale Reports</button></a>
            </div>

            <div class="col-4 mt-5">
            <a href="orderdetails.php"><button class="btn btn-info col-12">Order Details</button></a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="fixed-bottom col-12">
            <p class="text-center text-black">&copy; 2024 HEXASHOP.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->
    

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

}else {
    echo ("You are not Valid Admin");
}

?>