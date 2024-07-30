<?php

session_start();
include "connection.php";

$user = $_SESSION["u"];

if (isset($user)) {
    
?>
    
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <title>HEXASHOP - Shopping Cart</title>
    </head>
    <body onload="loadCart();" class="index">
        <!-- nav bar -->
        <?php include "navBar.php" ?>
        <!-- nav bar -->

        <div class="container mt-5">
            <div class="row" id="cartBody">

               <!-- cart load here -->

            </div>
        </div>

        <script src="script.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>    
    
<?php

} else {
    header("location: signIn.php");
}

?>
