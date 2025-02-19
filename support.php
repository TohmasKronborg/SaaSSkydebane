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

<div class="text-center bg-darkblue p-4">
    <img src="images/whitelogo.png" class="img-fluid" alt="logo">
</div>


<body>

<div class=" d-flex justify-content-center pt-5 pb-3 Montserat">
    <h1 class="fw-bold">Har du brug for hjælp?</h1>
</div>


<div class="bg-qGraa mx-4 mt-2 mb-4">
    <div class="d-flex flex-column align-items-center container-fluid pb-4 pt-3">
        <div>
            <h1 class="fw-bold"> Åbningstider </h1>
            <h4 class="fw-light"> Hverdage: 17.00 - 20.00</h4>
            <h4 class="fw-light"> Lørdag: Lukket </h4>
            <h4 class="fw-light"> Søndag: 17.00-20.00 </h4>
        </div>
    </div>

    <div class="d-flex flex-column align-items-center container-fluid py-5">
        <div>
            <h1 class="fw-bold"> Adresse</h1>
            <h4 class="fw-normal"> Tingsted Skytteforening </h4>
            <h4 class="fw-light"> Østergade 54 <br> 4863 Eskilstrup </h4>
        </div>
    </div>

    <div class="d-flex flex-column align-items-center container-fluid py-5">
        <div>
            <h1 class="fw-bold"> Kontakt os </h1>
            <h4 class="fw-light"> Tlf: 49 52 11 22 </h4>
            <h4 class="fw-light"> Hverdage: 17.00 - 20.00</h4>
        </div>
    </div>

</div>


<footer>

    <div class="bg-darkblue d-flex justify-content-evenly">
        <a class="nav-link active text-white" aria-current="page" href="forside.php">Inbox</a>
            <span class="text-white">|</span>
        <a class="nav-link text-white" href="booking.php">Booking</a>
            <span class="text-white">|</span>
        <a class="nav-link text-white" href="support.php">Support</a>
    </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
