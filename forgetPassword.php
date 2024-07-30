<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>HEXASHOP - Forget Password</title>
</head>
<body class="signIn_Body">

     <!-- forget password Box -->
    <div class="forget" id="signInBox">

     <div class="row">
        <h2 class="text-center">Forget Password</h2>

        <div class="mt-4 mb-4">
            <label for="form-label">Email :</label>
            <input type="email" class="form-control" id="e">
        </div>

        <div class="d-none" id="msgDiv">
            <div class="alert alert-danger" id="msg"></div>
        </div>

        <div class="mt-4">
            <button class="btn btn-secondary col-12" onclick="forgetPassword();">Send Email</button>
        </div>

     </div> 

    </div>
    <!-- forget password Box -->

    <script src="script.js"></script>
</body>

</html>