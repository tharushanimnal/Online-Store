<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {

    $rs = Database::search("SELECT * FROM `user` WHERE `id` = '".$user["id"]."'");
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
    </style>
    <title>HEXASHOP</title>
</head>
<body>
    <!-- navbar -->
    <?php include "navBar.php" ?>
    <!-- navbar -->   
    
    <div class="container profile mt-5">
        <div class="row">
            <div class="col-12 col-md-4 d-flex justify-content-center flex-column">
                <div class="d-flex justify-content-center mb-3">
                    <img src="<?php
                        if (!empty($d["img_path"])) {
                            echo $d["img_path"];
                        } else {
                            echo("Resources/img/Profile.png");
                        }
                    ?>" class="img-fluid" alt="Profile Image" id="i" style="max-width: 150px;"/>
                </div>
                <div>
                    <label class="form-label">Profile Image:</label>
                    <input type="file" class="form-control" id="imgUploader">
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-warning w-100" onclick="uploadImg();">Upload</button>
                </div>
            </div>
            
            <div class="col-12 col-md-8">
                <h2 class="text-center">Profile Details</h2>

                <div class="row mt-3">
                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" value="<?php echo $d["fname"] ?>" id="fname">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">Last Name:</label>
                        <input type="text" class="form-control" value="<?php echo $d["lname"] ?>" id="lname">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" value="<?php echo $d["email"] ?>" id="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile:</label>
                    <input type="text" class="form-control" value="<?php echo $d["mobile"] ?>" id="mobile">
                </div>

                <div class="row mt-3">
                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">User Name:</label>
                        <input type="text" class="form-control" value="<?php echo $d["username"] ?>" disabled>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control" value="<?php echo $d["password"] ?>" id="pw">
                    </div>
                </div>

                <h5 class="mt-3">Shipping Address</h5>

                <div class="row mt-3">
                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">No:</label>
                        <input type="text" class="form-control" id="no" value="<?php echo $d["no"] ?>">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">Line 01:</label>
                        <input type="text" class="form-control" id="line1" value="<?php echo $d["line_1"] ?>"> 
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Line 02:</label>
                    <input type="text" class="form-control" id="line2" value="<?php echo $d["line_2"] ?>">
                </div>

                <div class="mt-3">
                    <button class="btn btn-outline-warning w-100" onclick="updateData();">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="col-12 mt-3 text-white text-center font-weight-bold">
        <p>&copy; 2024 HEXASHOP.lk || All Right Reserved</p>
    </div>
    <!-- Footer -->

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    
<?php

} else {
    header("location: signin.php");
}

?>
