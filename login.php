<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Login</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="text-center bg-qBlaa ps-5 pe-5 pt-3 pb-3">
    <img src="images/whitelogo.png" class="img-fluid" alt="logo">
</div>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center m-3">
            <p class="h2">Log ind</p>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center m-3 bg-qGraa p-2 flex-column">
            <form action="login.php" method="get">
                <div class="mb-3">
                    <label for="username" class="form-label">Brugernavn</label>
                    <input type="text" class="form-control shadow-sm" id="username" aria-describedby="username" maxlength="50" name="data[username]">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control shadow-sm" id="password" aria-describedby="password" name="data[password]">
                </div>
                <button type="submit" class="btn btn-qRod text-white shadow-sm">Log ind</button>
            </form>
            <p class="mt-3 justify-content-center d-flex">Har du ingen konto? <br></p>
            <a class="d-flex mt-0 mb-3 justify-content-center" href="registrer.php">Klik her for at registrére en konto!</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>