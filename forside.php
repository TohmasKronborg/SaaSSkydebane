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

    <style>
        html, body {
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
<body>
<?php
include("includes/logoHeader.php");
?>

<h1 class="fw-bold d-flex justify-content-center pt-4 pb-2 ">Bookede tider</h1>
<!-- Box til announcements -->
<div class="bookingBox overflow-y-scroll rounded-4 m-2 border border-5 border-qBlaa shadow">
    <?php
    $sqlAdd = "";
    $bind = [];

    if (!empty($_GET["reservation_id"])) {
        $sqlAdd = "WHERE r.reservation_id = :reservationId";
        $bind["reservationId"] = $_GET["reservation_id"];
    }

    $sql = "SELECT r.reservation_id, r.user_name, l.lane_name, f.firearm_name, r.reservation_time 
        FROM reservations r
        JOIN lanes l ON r.lane_id = l.lane_id
        JOIN firearms f ON r.firearm_id = f.firearm_id
        " . $sqlAdd;

    $meetings = $db->sql($sql, $bind);

    foreach ($meetings as $meeting) {
        ?>
        <div class="border border-2 border-qGraa2 rounded-1 p-3 m-2">
            <?php
            echo "<p class='m-0'><strong>Starter kl. </strong>" . date("H:i", strtotime($meeting->reservation_time)) ."<strong> d. </strong>" . date("d-m-y", strtotime($meeting->reservation_time)) . "</p>";
            echo "<p class='m-0'><strong>Bane: </strong>" . htmlspecialchars($meeting->lane_name) . "</p>";
            echo "<p class='m-0'><strong>Bruger: </strong>" . htmlspecialchars($meeting->user_name) . "</p>";
            echo "<p class='m-0'><strong>Våben: </strong>" . htmlspecialchars($meeting->firearm_name) . "</p>";
            ?>
        </div>
        <?php
    }

    ?>
</div>


<h1 class="fw-bold d-flex justify-content-center pt-4 pb-2 ">Nyheder</h1>








<!-- navigations baren -->
<?php
include("includes/navigation.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
