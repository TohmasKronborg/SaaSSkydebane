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

    <title>Booking</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body{
            height: 100%;
        }
    </style>
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
<body class="d-flex flex-column">

<div class="text-center bg-qBlaa pb-3 pt-3">
    <img src="images/whitelogo.png" class="img-fluid" alt="logo" width="179" height="75">
</div>

<div class="container-fluid mt-3 mb-3">
    <h1 class="text-center">Booking</h1>
    <form action="booking.php" method="post">
        <div class="d-flex gap-2">
            <select class="form-select" aria-label="vaelg bane" name="data[lane_id]"> <!-- Bane select -->
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

        <div> <!-- Email Forms -->
            <label class="mt-2" for="email">Email</label>
            <input class="form-control" type="email" id="email">
        </div>

        <div> <!-- Calender -->
            <label class="mt-2" for="kalender">Kalender</label>
            <input class="form-control" type="date">
        </div>

        <div class="col-12 d-flex justify-content-center mt-2">
            <button type="submit" class="btn btn-qBlaa">Submit</button>
        </div>
    </form>
</div>

<?php
include("includes/navigation.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body class=m-0 d-flex flex-column">

</html>
