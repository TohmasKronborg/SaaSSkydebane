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

    <title>Inbox</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<?php
include("includes/logoHeader.php");
?>


<body>

<h1 class="fw-bold d-flex justify-content-center pt-4 pb-2 "> Dine tider</h1>

<!-- dette er carrusellen til dine bookede tider -->

<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/graato.png" class="d-block w-100" alt="">
            <div class="carousel-caption">
                <h5>Februar</h5>
                <p>Dato:  Torsdag 20/2/2025</p>
                <p>Bane: 3</p>
                <p>Skydevåben: <br> Grovpistol</p>
                <span>Tidspunkt:<br> <span class="fw-light">17.00-18.00</span></span></p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/graato.png" class="d-block w-100" alt="">
            <div class="carousel-caption">
                <h5>Marts</h5>
                <p>Dato:  Torsdag 06/3/2025</p>
                <p>Bane: 2</p>
                <p>Skydevåben: <br> Salonpistol</p>
                <span>Tidspunkt:<br> <span class="fw-light">17.00-18.00</span></span>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/graato.png" class="d-block w-100" alt="background">
            <div class="carousel-caption">
                <h5>April</h5>
                <p>Dato: Fredag 04/4/2025</p>
                <p>Bane: 4</p>
                <p>Skydevåben:<br> Salonriffel</p>
                <span>Tidspunkt:<br> <span class="fw-light">18.30-19.30</span></span>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>









<!-- navigations baren -->
<?php
include("includes/navigation.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
