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
<!--
.▄▄▄  ▄• ▄▌▪   ▄▄· ▄ •▄
▐▀•▀█ █▪██▌██ ▐█ ▌▪█▌▄▌▪
█▌·.█▌█▌▐█▌▐█·██ ▄▄▐▀▀▄·
▐█▪▄█·▐█▄█▌▐█▌▐███▌▐█.█▌
·▀▀█.  ▀▀▀ ▀▀▀·▀▀▀ ·▀  ▀
·▄▄▄▄  ▄▄▄   ▄▄▄· ▄▄▌ ▐ ▄▌
██▪ ██ ▀▄ █·▐█ ▀█ ██· █▌▐█
▐█· ▐█▌▐▀▀▄ ▄█▀▀█ ██▪▐█▐▐▌
██. ██ ▐█•█▌▐█ ▪▐▌▐█▌██▐█▌
▀▀▀▀▀• .▀  ▀ ▀  ▀  ▀▀▀▀ ▀▪
-->
<body class="bg-qGraa position-relative">

<nav class="bg-black d-flex justify-content-between p-3 position-sticky top-0">
    <a href="#" class="d-none d-md-block"><img src="images/whitelogo.png" alt="Logo" width="95" height="40"></a>
    <a href="#" class="d-md-none"><img src="images/QuickDrawLogoWhite.png" alt="Logo" width="38" height="40"></a>
    <div class="d-flex justify-content-between align-items-center w-md-25 gap-3">
        <a href="#" class="text-white">Log ind</a>
        <a href="registrer.php" class="rounded-3 bg-primary p-2 pe-3 ps-3 text-white">Tilmeld</a>
    </div>
</nav>

<div class="bg-black container-fluid pb-5">
    <div class="row text-center pt-5 pb-5">
        <h1 class="text-white landPageFS">Gør dine bookinger og aktivitet registreringer lette<br>og kom i gang med det samme!</h1>
        <p class="text-white ">QUICK DRAW hjælper dine medlemmer for nem og hurtig registrering af aktivitet<br>ved bare et simpelt tryk</p>
    </div>

    <div class="row justify-content-center gap-5 mb-1">
        <div class="col-12 col-md-4 text-center">
            <a href="#" class="bg-qBlaa text-white p-2 pe-3 ps-3 text-nowrap rounded-3 fs-3">Tilmeld dig nu!</a>
        </div>

        <div class="col-12 col-md-4 text-center">
            <a href="#" class="text-white fs-3">Find bookninger &#x21e8;</a>
        </div>
    </div>
</div>

<div class="overflow-x-hidden"> <!-- Blue waves -->
    <!-- sm svg --> <svg id="visual" viewBox="0 0 576 100" width="576" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="576" height="100" fill="#fafaf7"></rect><path d="M0 62L6 61.2C12 60.3 24 58.7 36 59.2C48 59.7 60 62.3 72 59.5C84 56.7 96 48.3 108 42.8C120 37.3 132 34.7 144 36.2C156 37.7 168 43.3 180 46.7C192 50 204 51 216 52C228 53 240 54 252 54C264 54 276 53 288 53.3C300 53.7 312 55.3 324 51C336 46.7 348 36.3 360 32.5C372 28.7 384 31.3 396 37.7C408 44 420 54 432 60.7C444 67.3 456 70.7 468 64C480 57.3 492 40.7 504 38.8C516 37 528 50 540 51.2C552 52.3 564 41.7 570 36.3L576 31L576 101L570 101C564 101 552 101 540 101C528 101 516 101 504 101C492 101 480 101 468 101C456 101 444 101 432 101C420 101 408 101 396 101C384 101 372 101 360 101C348 101 336 101 324 101C312 101 300 101 288 101C276 101 264 101 252 101C240 101 228 101 216 101C204 101 192 101 180 101C168 101 156 101 144 101C132 101 120 101 108 101C96 101 84 101 72 101C60 101 48 101 36 101C24 101 12 101 6 101L0 101Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <div class="bg-qBlaa d-flex justify-content-center align-items-center flex-column p-3">
        <p class="text-qGraa text-center mb-4 QDFormaal">
            <strong>QUICK DRAW</strong> har til formål at gøre det nemt og hurtigt for medlemmer af skytteforeninger at registrere deres aktivitet på den lokale skydebane.
            Vi <strong>stræber</strong> efter at være <strong>intuitive</strong>, <strong>brugervenlige</strong> og <strong>imødekommende</strong>, så registreringen bliver en <strong>enkel</strong> og <strong>ubesværet oplevelse</strong>.
        </p>
        <img class="img-fluid rounded-4 maxImgSize" src="images/Forside.png" alt="Screenshot2">
    </div>
    <!-- sm svg --> <svg id="visual" viewBox="0 0 576 100" width="576" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="576" height="100" fill="#fafaf7"></rect><path d="M0 37L6 41.2C12 45.3 24 53.7 36 58C48 62.3 60 62.7 72 63.5C84 64.3 96 65.7 108 62.2C120 58.7 132 50.3 144 50.2C156 50 168 58 180 62.8C192 67.7 204 69.3 216 66.5C228 63.7 240 56.3 252 49.2C264 42 276 35 288 35.5C300 36 312 44 324 46.7C336 49.3 348 46.7 360 46.5C372 46.3 384 48.7 396 49.8C408 51 420 51 432 54.3C444 57.7 456 64.3 468 64.7C480 65 492 59 504 58.5C516 58 528 63 540 62C552 61 564 54 570 50.5L576 47L576 0L570 0C564 0 552 0 540 0C528 0 516 0 504 0C492 0 480 0 468 0C456 0 444 0 432 0C420 0 408 0 396 0C384 0 372 0 360 0C348 0 336 0 324 0C312 0 300 0 288 0C276 0 264 0 252 0C240 0 228 0 216 0C204 0 192 0 180 0C168 0 156 0 144 0C132 0 120 0 108 0C96 0 84 0 72 0C60 0 48 0 36 0C24 0 12 0 6 0L0 0Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
