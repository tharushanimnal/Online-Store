<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <title>HEXASHOP</title>
    <link rel="icon" href="Resources/logo.png">
</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center container-fluid title01">HI, Welcome TO HEXASHOP</p>
                    </div>
                </div>
            </div>


            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block background"></div>

                <!-- signin box -->

                    <div class="signInBox" id="signInBox">
                        <div class="row container-fluid g-2 col-12 col-lg-6 ">
                            <div class="col-12">
                                <p class="title02 fs-4 text-center">Sign In</p>
                            </div>

                            <div class="col-12 d-none" id="msgdiv2">
                                <div class="alert alert-danger" role="alert" id="msg2">

                                </div>
                            </div>

                            <?php

                            $username = "";
                            $password = "";

                            if (isset($_COOKIE["username"])) {
                                $username = $_COOKIE["username"];
                            }

                            if (isset($_COOKIE["password"])) {
                                $password = $_COOKIE["password"];
                            }

                            ?>

                            <div class="mt-3">
                                <label for="form-label">Username</label>
                                <input type="text" class="form-control" id="un" value="<?php echo $username; ?>" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="pw" value="<?php echo $password; ?>" />
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rm" />
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="forgetPassword.php" class="link-primary" onclick="forgotPassword();">Forgot Password?</a>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="signin();">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-danger " onclick="changeView();">New to HEXASHOP? Join Now</button>
                            </div>
                        </div>
                    
                    </div>
                <!-- signin box -->

           
                <!-- signup box -->

                    <div class="signUpBox d-none" id="signUpBox">
                    
                        <div class="row g-2 col-6">

                            <div class="col-12">
                                <p class="title02 text-center">Create New Account</p>
                            </div>

                            <div class="col-12 d-none" id="msgdiv">
                                <div class="alert alert-danger" role="alert" id="msg">

                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="ex:- John" id="fname" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="ex:- Doe" id="lname" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="ex:- john@gmail.com" id="email" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" placeholder="ex:- 0771234568" id="mobile" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Usename</label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="username" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" />
                            </div>

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="signUp();">Sign Up</button>
                            </div>

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark" onclick="changeView();">Already have an account? Sign In</button>
                            </div>

                        </div>
                    
                    </div>

                    <!-- signup box -->
                </div>
            </div>

        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>