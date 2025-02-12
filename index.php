<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    
    <title>Landing Page</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="bg-black d-flex justify-content-between p-3 pb-5">
    <a href="#"><img src="images/whitelogo.png" alt="Logo" width="179" height="75"></a>
    <div class="d-flex justify-content-between align-items-center w-25">
        <a href="#" class="text-white">Log ind</a>
        <a href="registrer.php" class="rounded-4 bg-primary p-2 pe-3 ps-3 text-white">Tilmeld</a>
    </div>
</nav>

<div class="bg-black container-fluid">
    <div class="row text-center pt-5 pb-5">
        <h1 class="text-white">Gør dine bookinger og aktivitet registreringer lette<br>og kom i gang med det samme!</h1>
        <p class="text-white">QUICK DRAW hjælper dine medlemmer for nem og hurtig registrering af aktivitet<br>ved bare et simpelt tryk</p>
    </div>

    <div class="row mt-5 justify-content-center pb-5">
        <div class="col-2 text-center">
            <a href="#" class="bg-primary p-2 pe-3 ps-3 text-white rounded-2 fs-3">Tilmeld dig nu!</a>
        </div>

        <div class="col-2 text-center">
            <a href="#" class="text-white fs-3  ">Find bookninger</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
