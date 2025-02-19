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
<body class="position-relative landingBody">

<nav class="bg-black d-flex justify-content-between p-3 position-sticky top-0 mb-5 z-1">
    <a href="#" class="d-none d-md-block"><img src="images/whitelogo.png" alt="Logo" width="138" height="58"></a>
    <a href="#" class="d-md-none"><img src="images/QuickDrawLogoWhite.png" alt="Logo" width="38" height="40"></a>
    <div class="d-flex justify-content-between align-items-center w-md-25 gap-3">
        <a href="forside.php" class="text-white">Log ind</a>
        <a href="registrer.php" class="rounded-3 bg-primary p-2 pe-3 ps-3 text-white">Tilmeld</a>
    </div>
</nav>

<!-- Intro / Velkomst -->
<div class="container-fluid pb-5 blackBox">
    <div class="row text-center pt-5 pb-5">
        <h1 class="text-white landPageFS">Gør dine bookinger og aktivitet registreringer lette<br>og kom i gang med det samme!</h1>
        <p class="text-white-50 ">QUICK DRAW hjælper dine medlemmer for nem og hurtig registrering af aktivitet<br>ved bare et simpelt tryk</p>
    </div>

    <div class="row justify-content-center gap-5">
        <div class="col-12 col-md-4 text-center">
            <a href="registrer.php" class="bg-qBlaa text-white p-4 text-nowrap rounded-3 fs-4">Tilmeld dig nu &#x21c0;</a>
        </div>

        <div class="col-12 col-md-4 text-center">
            <a href="forside.php" class="text-white fs-4">Find bookninger &#x21c0;</a>
        </div>
    </div>
</div>

<!-- Billeder -->
<div class="d-flex justify-content-center p-3 isolation position-relative">
    <img class="img-fluid d-none d-lg-block rounded-4 me-5" src="images/AdobeStock_182169715_Preview.jpeg" alt="chad" width="721" height="500">
    <img class="img-fluid d-none d-lg-block position-absolute start-75 top-50 translate-middle rounded-4" src="images/Booking.png" alt="bliss" width="272" height="600">
    <img class="img-fluid d-lg-none rounded-4" src="images/Booking.png" alt="bliss">
</div>

<div class="overflow-x-hidden"> <!-- Blue waves section -->
    <!-- sm wave --> <svg class="d-md-none" id="visual" viewBox="0 0 576 100" width="576" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="576" height="100" fill="#f4f4f7"></rect><path d="M0 38L5 42.5C10 47 20 56 30.2 55C40.3 54 50.7 43 60.8 36.7C71 30.3 81 28.7 91 34C101 39.3 111 51.7 121.2 52.3C131.3 53 141.7 42 151.8 41.3C162 40.7 172 50.3 182 51.5C192 52.7 202 45.3 212.2 40.2C222.3 35 232.7 32 242.8 33.7C253 35.3 263 41.7 273 41.2C283 40.7 293 33.3 303 29.8C313 26.3 323 26.7 333.2 28.7C343.3 30.7 353.7 34.3 363.8 41.7C374 49 384 60 394 62.3C404 64.7 414 58.3 424.2 51.7C434.3 45 444.7 38 454.8 40.7C465 43.3 475 55.7 485 59C495 62.3 505 56.7 515.2 50.3C525.3 44 535.7 37 545.8 33.7C556 30.3 566 30.7 571 30.8L576 31L576 101L571 101C566 101 556 101 545.8 101C535.7 101 525.3 101 515.2 101C505 101 495 101 485 101C475 101 465 101 454.8 101C444.7 101 434.3 101 424.2 101C414 101 404 101 394 101C384 101 374 101 363.8 101C353.7 101 343.3 101 333.2 101C323 101 313 101 303 101C293 101 283 101 273 101C263 101 253 101 242.8 101C232.7 101 222.3 101 212.2 101C202 101 192 101 182 101C172 101 162 101 151.8 101C141.7 101 131.3 101 121.2 101C111 101 101 101 91 101C81 101 71 101 60.8 101C50.7 101 40.3 101 30.2 101C20 101 10 101 5 101L0 101Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <!-- md wave --> <svg class="d-none d-md-block d-lg-none" id="visual1" viewBox="0 0 768 100" width="768" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="768" height="100" fill="#f4f4f7"></rect><path d="M0 38L6.7 42.5C13.3 47 26.7 56 40.2 55C53.7 54 67.3 43 80.8 36.7C94.3 30.3 107.7 28.7 121.2 34C134.7 39.3 148.3 51.7 161.8 52.3C175.3 53 188.7 42 202.2 41.3C215.7 40.7 229.3 50.3 242.8 51.5C256.3 52.7 269.7 45.3 283 40.2C296.3 35 309.7 32 323.2 33.7C336.7 35.3 350.3 41.7 363.8 41.2C377.3 40.7 390.7 33.3 404.2 29.8C417.7 26.3 431.3 26.7 444.8 28.7C458.3 30.7 471.7 34.3 485 41.7C498.3 49 511.7 60 525.2 62.3C538.7 64.7 552.3 58.3 565.8 51.7C579.3 45 592.7 38 606.2 40.7C619.7 43.3 633.3 55.7 646.8 59C660.3 62.3 673.7 56.7 687.2 50.3C700.7 44 714.3 37 727.8 33.7C741.3 30.3 754.7 30.7 761.3 30.8L768 31L768 101L761.3 101C754.7 101 741.3 101 727.8 101C714.3 101 700.7 101 687.2 101C673.7 101 660.3 101 646.8 101C633.3 101 619.7 101 606.2 101C592.7 101 579.3 101 565.8 101C552.3 101 538.7 101 525.2 101C511.7 101 498.3 101 485 101C471.7 101 458.3 101 444.8 101C431.3 101 417.7 101 404.2 101C390.7 101 377.3 101 363.8 101C350.3 101 336.7 101 323.2 101C309.7 101 296.3 101 283 101C269.7 101 256.3 101 242.8 101C229.3 101 215.7 101 202.2 101C188.7 101 175.3 101 161.8 101C148.3 101 134.7 101 121.2 101C107.7 101 94.3 101 80.8 101C67.3 101 53.7 101 40.2 101C26.7 101 13.3 101 6.7 101L0 101Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <!-- lg wave --> <svg class="d-none d-lg-block" id="visual1" viewBox="0 0 2000 100" width="2000" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="2000" height="100" fill="#f4f4f7"></rect><path d="M0 59L10.8 60.5C21.7 62 43.3 65 64.8 62.8C86.3 60.7 107.7 53.3 129.2 52.5C150.7 51.7 172.3 57.3 193.8 60.5C215.3 63.7 236.7 64.3 258.2 59.2C279.7 54 301.3 43 322.8 39.7C344.3 36.3 365.7 40.7 387.2 44.7C408.7 48.7 430.3 52.3 451.8 50.8C473.3 49.3 494.7 42.7 516.2 38.8C537.7 35 559.3 34 580.8 39.5C602.3 45 623.7 57 645.2 56.2C666.7 55.3 688.3 41.7 709.8 41C731.3 40.3 752.7 52.7 774.2 57.8C795.7 63 817.3 61 838.8 58.8C860.3 56.7 881.7 54.3 903.2 51.2C924.7 48 946.3 44 967.8 39.7C989.3 35.3 1010.7 30.7 1032.2 30.5C1053.7 30.3 1075.3 34.7 1096.8 41.5C1118.3 48.3 1139.7 57.7 1161.2 58.3C1182.7 59 1204.3 51 1225.8 48.8C1247.3 46.7 1268.7 50.3 1290.2 50.7C1311.7 51 1333.3 48 1354.8 47.5C1376.3 47 1397.7 49 1419.2 46.8C1440.7 44.7 1462.3 38.3 1483.8 40.5C1505.3 42.7 1526.7 53.3 1548.2 56.5C1569.7 59.7 1591.3 55.3 1612.8 53C1634.3 50.7 1655.7 50.3 1677.2 52.3C1698.7 54.3 1720.3 58.7 1741.8 59.3C1763.3 60 1784.7 57 1806.2 58.3C1827.7 59.7 1849.3 65.3 1870.8 68.2C1892.3 71 1913.7 71 1935.2 68.7C1956.7 66.3 1978.3 61.7 1989.2 59.3L2000 57L2000 101L1989.2 101C1978.3 101 1956.7 101 1935.2 101C1913.7 101 1892.3 101 1870.8 101C1849.3 101 1827.7 101 1806.2 101C1784.7 101 1763.3 101 1741.8 101C1720.3 101 1698.7 101 1677.2 101C1655.7 101 1634.3 101 1612.8 101C1591.3 101 1569.7 101 1548.2 101C1526.7 101 1505.3 101 1483.8 101C1462.3 101 1440.7 101 1419.2 101C1397.7 101 1376.3 101 1354.8 101C1333.3 101 1311.7 101 1290.2 101C1268.7 101 1247.3 101 1225.8 101C1204.3 101 1182.7 101 1161.2 101C1139.7 101 1118.3 101 1096.8 101C1075.3 101 1053.7 101 1032.2 101C1010.7 101 989.3 101 967.8 101C946.3 101 924.7 101 903.2 101C881.7 101 860.3 101 838.8 101C817.3 101 795.7 101 774.2 101C752.7 101 731.3 101 709.8 101C688.3 101 666.7 101 645.2 101C623.7 101 602.3 101 580.8 101C559.3 101 537.7 101 516.2 101C494.7 101 473.3 101 451.8 101C430.3 101 408.7 101 387.2 101C365.7 101 344.3 101 322.8 101C301.3 101 279.7 101 258.2 101C236.7 101 215.3 101 193.8 101C172.3 101 150.7 101 129.2 101C107.7 101 86.3 101 64.8 101C43.3 101 21.7 101 10.8 101L0 101Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <div class="bg-qBlaa container-fluid p-3">
        <div class="row pe-md-5 ps-md-5 hidden">
            <div class="col-12 col-md-7 d-flex align-items-center">
                <p class="text-qGraa text-center mb-4 QDFormaal slide-in-element">
                    <strong>QUICK DRAW</strong> har til formål at gøre det nemt og hurtigt for medlemmer af skytteforeninger at registrere deres aktivitet på den lokale skydebane.
                    Vi <strong>stræber</strong> efter at være <strong>intuitive</strong>, <strong>brugervenlige</strong> og <strong>imødekommende</strong>, så registreringen bliver en <strong>enkel</strong> og <strong>ubesværet oplevelse</strong>.
                </p>
            </div>

            <div class="col-12 col-md-5 d-flex justify-content-center">
                <img class="img-fluid rounded-4 maxImgSize shadow" src="images/Forside.png" alt="Screenshot2">
            </div>
        </div>
    </div>
    <!-- sm wave --> <svg class="d-md-none" id="visual3" viewBox="0 0 576 100" width="576" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="576" height="100" fill="#f4f4f7"></rect><path d="M0 40L5 38.8C10 37.7 20 35.3 30.2 37.3C40.3 39.3 50.7 45.7 60.8 51.2C71 56.7 81 61.3 91 58.3C101 55.3 111 44.7 121.2 45C131.3 45.3 141.7 56.7 151.8 56.2C162 55.7 172 43.3 182 40.8C192 38.3 202 45.7 212.2 52.3C222.3 59 232.7 65 242.8 65.5C253 66 263 61 273 55.3C283 49.7 293 43.3 303 41.8C313 40.3 323 43.7 333.2 41.8C343.3 40 353.7 33 363.8 33.3C374 33.7 384 41.3 394 47.7C404 54 414 59 424.2 55.8C434.3 52.7 444.7 41.3 454.8 41.8C465 42.3 475 54.7 485 55.7C495 56.7 505 46.3 515.2 43.8C525.3 41.3 535.7 46.7 545.8 47.3C556 48 566 44 571 42L576 40L576 0L571 0C566 0 556 0 545.8 0C535.7 0 525.3 0 515.2 0C505 0 495 0 485 0C475 0 465 0 454.8 0C444.7 0 434.3 0 424.2 0C414 0 404 0 394 0C384 0 374 0 363.8 0C353.7 0 343.3 0 333.2 0C323 0 313 0 303 0C293 0 283 0 273 0C263 0 253 0 242.8 0C232.7 0 222.3 0 212.2 0C202 0 192 0 182 0C172 0 162 0 151.8 0C141.7 0 131.3 0 121.2 0C111 0 101 0 91 0C81 0 71 0 60.8 0C50.7 0 40.3 0 30.2 0C20 0 10 0 5 0L0 0Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <!-- md wave --> <svg class="d-none d-md-block d-lg-none" id="visual4" viewBox="0 0 768 100" width="768" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="768" height="100" fill="#f4f4f7"></rect><path d="M0 40L6.7 38.8C13.3 37.7 26.7 35.3 40.2 37.3C53.7 39.3 67.3 45.7 80.8 51.2C94.3 56.7 107.7 61.3 121.2 58.3C134.7 55.3 148.3 44.7 161.8 45C175.3 45.3 188.7 56.7 202.2 56.2C215.7 55.7 229.3 43.3 242.8 40.8C256.3 38.3 269.7 45.7 283 52.3C296.3 59 309.7 65 323.2 65.5C336.7 66 350.3 61 363.8 55.3C377.3 49.7 390.7 43.3 404.2 41.8C417.7 40.3 431.3 43.7 444.8 41.8C458.3 40 471.7 33 485 33.3C498.3 33.7 511.7 41.3 525.2 47.7C538.7 54 552.3 59 565.8 55.8C579.3 52.7 592.7 41.3 606.2 41.8C619.7 42.3 633.3 54.7 646.8 55.7C660.3 56.7 673.7 46.3 687.2 43.8C700.7 41.3 714.3 46.7 727.8 47.3C741.3 48 754.7 44 761.3 42L768 40L768 0L761.3 0C754.7 0 741.3 0 727.8 0C714.3 0 700.7 0 687.2 0C673.7 0 660.3 0 646.8 0C633.3 0 619.7 0 606.2 0C592.7 0 579.3 0 565.8 0C552.3 0 538.7 0 525.2 0C511.7 0 498.3 0 485 0C471.7 0 458.3 0 444.8 0C431.3 0 417.7 0 404.2 0C390.7 0 377.3 0 363.8 0C350.3 0 336.7 0 323.2 0C309.7 0 296.3 0 283 0C269.7 0 256.3 0 242.8 0C229.3 0 215.7 0 202.2 0C188.7 0 175.3 0 161.8 0C148.3 0 134.7 0 121.2 0C107.7 0 94.3 0 80.8 0C67.3 0 53.7 0 40.2 0C26.7 0 13.3 0 6.7 0L0 0Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <!-- lg wave --> <svg class="d-none d-lg-block" id="visual5" viewBox="0 0 2000 100" width="2000" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="2000" height="100" fill="#f4f4f7"></rect><path d="M0 39L10.8 37.5C21.7 36 43.3 33 64.8 35.2C86.3 37.3 107.7 44.7 129.2 45.5C150.7 46.3 172.3 40.7 193.8 37.5C215.3 34.3 236.7 33.7 258.2 38.8C279.7 44 301.3 55 322.8 58.3C344.3 61.7 365.7 57.3 387.2 53.3C408.7 49.3 430.3 45.7 451.8 47.2C473.3 48.7 494.7 55.3 516.2 59.2C537.7 63 559.3 64 580.8 58.5C602.3 53 623.7 41 645.2 41.8C666.7 42.7 688.3 56.3 709.8 57C731.3 57.7 752.7 45.3 774.2 40.2C795.7 35 817.3 37 838.8 39.2C860.3 41.3 881.7 43.7 903.2 46.8C924.7 50 946.3 54 967.8 58.3C989.3 62.7 1010.7 67.3 1032.2 67.5C1053.7 67.7 1075.3 63.3 1096.8 56.5C1118.3 49.7 1139.7 40.3 1161.2 39.7C1182.7 39 1204.3 47 1225.8 49.2C1247.3 51.3 1268.7 47.7 1290.2 47.3C1311.7 47 1333.3 50 1354.8 50.5C1376.3 51 1397.7 49 1419.2 51.2C1440.7 53.3 1462.3 59.7 1483.8 57.5C1505.3 55.3 1526.7 44.7 1548.2 41.5C1569.7 38.3 1591.3 42.7 1612.8 45C1634.3 47.3 1655.7 47.7 1677.2 45.7C1698.7 43.7 1720.3 39.3 1741.8 38.7C1763.3 38 1784.7 41 1806.2 39.7C1827.7 38.3 1849.3 32.7 1870.8 29.8C1892.3 27 1913.7 27 1935.2 29.3C1956.7 31.7 1978.3 36.3 1989.2 38.7L2000 41L2000 0L1989.2 0C1978.3 0 1956.7 0 1935.2 0C1913.7 0 1892.3 0 1870.8 0C1849.3 0 1827.7 0 1806.2 0C1784.7 0 1763.3 0 1741.8 0C1720.3 0 1698.7 0 1677.2 0C1655.7 0 1634.3 0 1612.8 0C1591.3 0 1569.7 0 1548.2 0C1526.7 0 1505.3 0 1483.8 0C1462.3 0 1440.7 0 1419.2 0C1397.7 0 1376.3 0 1354.8 0C1333.3 0 1311.7 0 1290.2 0C1268.7 0 1247.3 0 1225.8 0C1204.3 0 1182.7 0 1161.2 0C1139.7 0 1118.3 0 1096.8 0C1075.3 0 1053.7 0 1032.2 0C1010.7 0 989.3 0 967.8 0C946.3 0 924.7 0 903.2 0C881.7 0 860.3 0 838.8 0C817.3 0 795.7 0 774.2 0C752.7 0 731.3 0 709.8 0C688.3 0 666.7 0 645.2 0C623.7 0 602.3 0 580.8 0C559.3 0 537.7 0 516.2 0C494.7 0 473.3 0 451.8 0C430.3 0 408.7 0 387.2 0C365.7 0 344.3 0 322.8 0C301.3 0 279.7 0 258.2 0C236.7 0 215.3 0 193.8 0C172.3 0 150.7 0 129.2 0C107.7 0 86.3 0 64.8 0C43.3 0 21.7 0 10.8 0L0 0Z" fill="#3a6fb0" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
</div>

<!-- Funktioner -->
<div class="container bg-qGraa2 p-3 p-md-5 me-auto ms-auto rounded-4 text-center">
    <div class="row gap-3 gap-md-5 mb-3 mb-md-5 hidden justify-content-center">
        <!-- Booking funktion -->
        <div class="col-10 col-md-4 p-0 d-flex flex-column align-items-center gap-4 hidden">
            <div class="bg-qBlaa rounded-4">
                <p class="h3 text-center text-white p-2 m-0">
                    Booking
                </p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                <g clip-path="url(#clip0_63_229)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.875 0C22.7038 0 23.4987 0.32924 24.0847 0.915291C24.6708 1.50134 25 2.2962 25 3.125V6.25H75V3.125C75 2.2962 75.3292 1.50134 75.9153 0.915291C76.5013 0.32924 77.2962 0 78.125 0C78.9538 0 79.7487 0.32924 80.3347 0.915291C80.9208 1.50134 81.25 2.2962 81.25 3.125V6.25H87.5C90.8152 6.25 93.9946 7.56696 96.3388 9.91117C98.683 12.2554 100 15.4348 100 18.75V87.5C100 90.8152 98.683 93.9946 96.3388 96.3388C93.9946 98.683 90.8152 100 87.5 100H12.5C9.18479 100 6.00537 98.683 3.66117 96.3388C1.31696 93.9946 0 90.8152 0 87.5V18.75C0 15.4348 1.31696 12.2554 3.66117 9.91117C6.00537 7.56696 9.18479 6.25 12.5 6.25H18.75V3.125C18.75 2.2962 19.0792 1.50134 19.6653 0.915291C20.2513 0.32924 21.0462 0 21.875 0V0ZM12.5 12.5C10.8424 12.5 9.25268 13.1585 8.08058 14.3306C6.90848 15.5027 6.25 17.0924 6.25 18.75V87.5C6.25 89.1576 6.90848 90.7473 8.08058 91.9194C9.25268 93.0915 10.8424 93.75 12.5 93.75H87.5C89.1576 93.75 90.7473 93.0915 91.9194 91.9194C93.0915 90.7473 93.75 89.1576 93.75 87.5V18.75C93.75 17.0924 93.0915 15.5027 91.9194 14.3306C90.7473 13.1585 89.1576 12.5 87.5 12.5H12.5Z" fill="black"/>
                    <path d="M15.625 25C15.625 24.1712 15.9542 23.3763 16.5403 22.7903C17.1263 22.2042 17.9212 21.875 18.75 21.875H81.25C82.0788 21.875 82.8737 22.2042 83.4597 22.7903C84.0458 23.3763 84.375 24.1712 84.375 25V31.25C84.375 32.0788 84.0458 32.8737 83.4597 33.4597C82.8737 34.0458 82.0788 34.375 81.25 34.375H18.75C17.9212 34.375 17.1263 34.0458 16.5403 33.4597C15.9542 32.8737 15.625 32.0788 15.625 31.25V25ZM68.75 46.875C68.75 46.0462 69.0792 45.2513 69.6653 44.6653C70.2513 44.0792 71.0462 43.75 71.875 43.75H78.125C78.9538 43.75 79.7487 44.0792 80.3347 44.6653C80.9208 45.2513 81.25 46.0462 81.25 46.875V53.125C81.25 53.9538 80.9208 54.7487 80.3347 55.3347C79.7487 55.9208 78.9538 56.25 78.125 56.25H71.875C71.0462 56.25 70.2513 55.9208 69.6653 55.3347C69.0792 54.7487 68.75 53.9538 68.75 53.125V46.875ZM50 46.875C50 46.0462 50.3292 45.2513 50.9153 44.6653C51.5013 44.0792 52.2962 43.75 53.125 43.75H59.375C60.2038 43.75 60.9987 44.0792 61.5847 44.6653C62.1708 45.2513 62.5 46.0462 62.5 46.875V53.125C62.5 53.9538 62.1708 54.7487 61.5847 55.3347C60.9987 55.9208 60.2038 56.25 59.375 56.25H53.125C52.2962 56.25 51.5013 55.9208 50.9153 55.3347C50.3292 54.7487 50 53.9538 50 53.125V46.875ZM18.75 65.625C18.75 64.7962 19.0792 64.0013 19.6653 63.4153C20.2513 62.8292 21.0462 62.5 21.875 62.5H28.125C28.9538 62.5 29.7487 62.8292 30.3347 63.4153C30.9208 64.0013 31.25 64.7962 31.25 65.625V71.875C31.25 72.7038 30.9208 73.4987 30.3347 74.0847C29.7487 74.6708 28.9538 75 28.125 75H21.875C21.0462 75 20.2513 74.6708 19.6653 74.0847C19.0792 73.4987 18.75 72.7038 18.75 71.875V65.625ZM37.5 65.625C37.5 64.7962 37.8292 64.0013 38.4153 63.4153C39.0013 62.8292 39.7962 62.5 40.625 62.5H46.875C47.7038 62.5 48.4987 62.8292 49.0847 63.4153C49.6708 64.0013 50 64.7962 50 65.625V71.875C50 72.7038 49.6708 73.4987 49.0847 74.0847C48.4987 74.6708 47.7038 75 46.875 75H40.625C39.7962 75 39.0013 74.6708 38.4153 74.0847C37.8292 73.4987 37.5 72.7038 37.5 71.875V65.625Z" fill="black"/>
                </g>
                <defs>
                    <clipPath id="clip0_63_229">
                        <rect width="100" height="100" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
            <p class="h5 mt-0">Book bane med oversigt og kalender</p>
        </div>


        <!-- Announcements funktion -->
        <div class="col-10 col-md-4 p-0 d-flex flex-column align-items-center gap-4 hidden">
            <div class="bg-qBlaa rounded-4">
                <p class="h3 text-center text-white p-2 m-0">
                    Meddelelser
                </p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                <g clip-path="url(#clip0_63_240)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.87893e-05 15.625C1.87893e-05 13.1386 0.987739 10.754 2.74589 8.99587C4.50405 7.23772 6.88861 6.25 9.37502 6.25H78.125C80.6114 6.25 82.996 7.23772 84.7541 8.99587C86.5123 10.754 87.5 13.1386 87.5 15.625V81.425C87.5 83.3 87.1875 85.5125 86.0125 87.5H90.625C91.4538 87.5 92.2487 87.1708 92.8347 86.5847C93.4208 85.9987 93.75 85.2038 93.75 84.375V28.125C93.75 27.2962 94.0793 26.5013 94.6653 25.9153C95.2514 25.3292 96.0462 25 96.875 25C97.7038 25 98.4987 25.3292 99.0847 25.9153C99.6708 26.5013 100 27.2962 100 28.125V84.375C100 86.8614 99.0123 89.246 97.2541 91.0041C95.496 92.7623 93.1114 93.75 90.625 93.75H9.35627C8.12601 93.75 6.90783 93.5074 5.77145 93.036C4.63507 92.5646 3.60282 91.8738 2.73376 91.003C1.86471 90.1322 1.17592 89.0986 0.706832 87.9612C0.237741 86.8239 -0.00244666 85.6053 1.87893e-05 84.375V15.625ZM75 87.5C77.3125 87.5 79.0875 86.1813 80.3313 84.7438C80.9063 84.0813 81.25 83 81.25 81.425V15.625C81.25 14.7962 80.9208 14.0013 80.3347 13.4153C79.7487 12.8292 78.9538 12.5 78.125 12.5H9.37502C8.54622 12.5 7.75136 12.8292 7.16531 13.4153C6.57926 14.0013 6.25002 14.7962 6.25002 15.625V84.375C6.25002 86.1125 7.64377 87.5 9.35627 87.5H75Z" fill="black"/>
                    <path d="M12.5 18.75H75V31.25H12.5V18.75ZM12.5 37.5H37.5V56.25H12.5V37.5ZM12.5 62.5H37.5V68.75H12.5V62.5ZM12.5 75H37.5V81.25H12.5V75ZM43.75 37.5H56.25V43.75H43.75V37.5ZM62.5 37.5H75V43.75H62.5V37.5ZM43.75 50H56.25V56.25H43.75V50ZM62.5 50H75V56.25H62.5V50ZM43.75 62.5H56.25V68.75H43.75V62.5ZM62.5 62.5H75V68.75H62.5V62.5ZM43.75 75H56.25V81.25H43.75V75ZM62.5 75H75V81.25H62.5V75Z" fill="black"/>
                </g>
                <defs>
                    <clipPath id="clip0_63_240">
                        <rect width="100" height="100" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
            <p class="h5 mt-0">Se dine meddelser og andet info</p>
        </div>
    </div>

    <div class="row gap-3 gap-md-5 justify-content-center">
        <!-- Registrering funktion -->
        <div class="col-10 col-md-4 p-0 d-flex flex-column align-items-center gap-4 hidden">
            <div class="bg-qBlaa rounded-4">
                <p class="h3 text-center text-white p-2 m-0">
                    Hurtig Registrering
                </p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none">
                <path d="M23.2526 2.90987C23.3927 3.05045 23.4714 3.24086 23.4714 3.43937C23.4714 3.63787 23.3927 3.82828 23.2526 3.96886L21.6881 5.53486L18.6881 2.53487L20.2526 0.968865C20.3932 0.828262 20.584 0.749275 20.7828 0.749275C20.9817 0.749275 21.1724 0.828262 21.3131 0.968865L23.2526 2.90837V2.90987ZM20.6276 6.59386L17.6276 3.59386L7.40807 13.8149C7.32552 13.8974 7.26337 13.9981 7.22657 14.1089L6.01907 17.7299C5.99717 17.7959 5.99407 17.8667 6.01009 17.9344C6.02612 18.002 6.06066 18.0639 6.10984 18.1131C6.15901 18.1623 6.2209 18.1968 6.28858 18.2128C6.35626 18.2289 6.42706 18.2258 6.49307 18.2039L10.1141 16.9964C10.2247 16.96 10.3254 16.8984 10.4081 16.8164L20.6276 6.59536V6.59386Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 20.25C1.5 20.8467 1.73705 21.419 2.15901 21.841C2.58097 22.2629 3.15326 22.5 3.75 22.5H20.25C20.8467 22.5 21.419 22.2629 21.841 21.841C22.2629 21.419 22.5 20.8467 22.5 20.25V11.25C22.5 11.0511 22.421 10.8603 22.2803 10.7197C22.1397 10.579 21.9489 10.5 21.75 10.5C21.5511 10.5 21.3603 10.579 21.2197 10.7197C21.079 10.8603 21 11.0511 21 11.25V20.25C21 20.4489 20.921 20.6397 20.7803 20.7803C20.6397 20.921 20.4489 21 20.25 21H3.75C3.55109 21 3.36032 20.921 3.21967 20.7803C3.07902 20.6397 3 20.4489 3 20.25V3.75C3 3.55109 3.07902 3.36032 3.21967 3.21967C3.36032 3.07902 3.55109 3 3.75 3H13.5C13.6989 3 13.8897 2.92098 14.0303 2.78033C14.171 2.63968 14.25 2.44891 14.25 2.25C14.25 2.05109 14.171 1.86032 14.0303 1.71967C13.8897 1.57902 13.6989 1.5 13.5 1.5H3.75C3.15326 1.5 2.58097 1.73705 2.15901 2.15901C1.73705 2.58097 1.5 3.15326 1.5 3.75V20.25Z" fill="black"/>
            </svg>
            <p class="h5 mt-0">Hurtig og nemt registrering af aktivitet</p>
        </div>

        <!-- Support funktion -->
        <div class="col-10 col-md-4 p-0 d-flex flex-column align-items-center gap-4 hidden">
            <div class="bg-qBlaa rounded-4">
                <p class="h3 text-center text-white p-2 m-0">
                    Support
                </p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 21C10.5 21 9 21 9 19.5C9 18 10.5 13.5 16.5 13.5C22.5 13.5 24 18 24 19.5C24 21 22.5 21 22.5 21H10.5ZM16.5 12C17.6935 12 18.8381 11.5259 19.682 10.682C20.5259 9.83807 21 8.69347 21 7.5C21 6.30653 20.5259 5.16193 19.682 4.31802C18.8381 3.47411 17.6935 3 16.5 3C15.3065 3 14.1619 3.47411 13.318 4.31802C12.4741 5.16193 12 6.30653 12 7.5C12 8.69347 12.4741 9.83807 13.318 10.682C14.1619 11.5259 15.3065 12 16.5 12ZM7.824 21C7.60163 20.5317 7.49074 20.0183 7.5 19.5C7.5 17.4675 8.52 15.375 10.404 13.92C9.46364 13.6303 8.48392 13.4886 7.5 13.5C1.5 13.5 0 18 0 19.5C0 21 1.5 21 1.5 21H7.824ZM6.75 12C7.74456 12 8.69839 11.6049 9.40165 10.9017C10.1049 10.1984 10.5 9.24456 10.5 8.25C10.5 7.25544 10.1049 6.30161 9.40165 5.59835C8.69839 4.89509 7.74456 4.5 6.75 4.5C5.75544 4.5 4.80161 4.89509 4.09835 5.59835C3.39509 6.30161 3 7.25544 3 8.25C3 9.24456 3.39509 10.1984 4.09835 10.9017C4.80161 11.6049 5.75544 12 6.75 12Z" fill="black"/>
            </svg>
            <p class="h5 mt-0">24/7 support</p>
        </div>
    </div>
</div>

<!-- Background dims -->
<script>
    // Laver en transition mellem to givne farver med en factor som er 0 til 1
    function interpolateColor(color1, color2, factor) {
        return `rgb(${color1.map((c, i) => Math.round(c + factor * (color2[i] - c))).join(',')})`;
    }

    // Laver hex color codes om til rgb da JavaScript ikke fungere med hexidecimal
    function hexToRgb(hex) {
        let bigint = parseInt(hex.slice(1), 16);
        return [(bigint >> 16) & 255, (bigint >> 8) & 255, bigint & 255];
    }

    // Color transition setup
    const colorStart = hexToRgb("#000"); // Start color (black)
    const colorEnd = hexToRgb("#f4f4f7"); // End color (light gray)
    const scrollEnd = 450; // Slut punkt for farve transitionen

    // Tilføjer en scroll Eventlistener til window(sidens fane)
    window.addEventListener("scroll", () => {
        let scrollTop = document.documentElement.scrollTop;

        // Normalize the scroll value between 0 and 1 based on the fixed endpoint
        let scrollFraction = Math.min(scrollTop / scrollEnd, 1);

        // Anvend farven på bodyen
        document.body.style.backgroundColor = interpolateColor(colorStart, colorEnd, scrollFraction);
    });

</script>

<!-- Element fade in -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // Stop observing after it's shown
                }
            });
        }, { threshold: 0.1 }); // Adjust threshold if needed

        const hiddenElements = document.querySelectorAll(".hidden");
        hiddenElements.forEach((el) => observer.observe(el));
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
