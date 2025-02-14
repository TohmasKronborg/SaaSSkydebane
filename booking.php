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

    <title>Support</title>

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
<body>

<div class="text-center bg-qBlaa pb-3 pt-3">
    <img src="images/whitelogo.png" class="img-fluid" alt="logo" width="179" height="75">
</div>

<div class="container-fluid mt-3 mb-3">
    <h1 class="text-center">Booking</h1>

    <div class="d-flex gap-2">
        <select class="form-select" aria-label="vaelg bane"> <!-- Bane select -->
            <option selected>Vælg en bane</option>
            <option value="1">50 meter Udendørs</option>
            <option value="2">100 meter Udendørs</option>
            <option value="3">50 meter Indendørs</option>
            <option value="4">100 meter Indendørs</option>
        </select>

        <select class="form-select" aria-label="vaelg bane">
            <option selected>Våben type</option>
            <option value="1">Luftgevær</option>
            <option value="2">Luftpistol</option>
            <option value="3">Salonriffel</option>
            <option value="4">Grov kaliber</option>
            <option value="5">Salonpistol</option>
            <option value="6">Grovpistol</option>
        </select>
    </div>
    <div> <!-- Name Forms -->
        <label class="mt-2" for="name">Navn</label>
        <input class="form-control" type="text" id="name">
    </div>
    
    <div> <!-- Calender -->
        <label class="mt-2" for="kalender">Kalender</label>
        <input class="form-control" type="date">
    </div>
</div>


<footer class="bg-qBlaa d-flex justify-content-evenly">
    <a class="nav-link active text-white" aria-current="page" href="#">Inbox</a>
    <span class="text-white">|</span>
    <a class="nav-link text-white" href="#">Booking</a>
    <span class="text-white">|</span>
    <a class="nav-link text-white" href="#">Support</a>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
