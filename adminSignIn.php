<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <title>HEXASHOP</title>
</head>

<body class="adminsignInBody">

    <div class="adminSignIn_Box">

        <h2 class="text-center text-black">Admin Login</h2>

        <div class="mt-3">
            <label for="form-label">Username :</label>
            <input type="text" class="form-control border-black bg-transparent" placeholder=" Ex: John" id="un"/>
        </div>

        <div class="mt-3 mb-3">
            <label for="form-label">Password :</label>
            <input type="password" class="form-control border-black bg-transparent" placeholder=" Ex: ********" id="pw"/>
        </div>

        <div class="d-none" id="msgDiv">
            <div class="alert alert-danger" id="msg"></div>
        </div>

        <div class="d-flex justify-content-center ">
            <button class="btn btn-dark col-2" onclick="adminSignIn();">Sign In</button>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>