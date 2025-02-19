<?php
/**
 * @var db $db
 */

require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST['data'];

    if (isset($data["user_name"], $data["lane_id"], $data["firearm_id"], $data["reservation_time"])) {

        $check_status = isset($data['check_status']) ? 1 : 0;
        $payment_status = isset($data['payment_status']) ? 1 : 0;

        $sql = "INSERT INTO reservations (user_name, lane_id, firearm_id, reservation_time, check_status, payment_status) 
                VALUES(:user_name, :lane_id, :firearm_id, :reservation_time, :check_status, :payment_status)";

        $bind = [
            ":user_name" => $data["user_name"],
            ":lane_id" => $data["lane_id"],
            ":firearm_id" => $data["firearm_id"],
            ":reservation_time" => $data["reservation_time"],
            ":check_status" => $check_status,
            ":payment_status" => $payment_status
        ];

        $db->sql($sql, $bind, false);

        echo "Booking added! <a href='forside.php'>Til forside</a>";
        exit;
    } else {
        echo "Missing required fields!";
    }
}



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

<body class="d-flex flex-column">

<?php
include("includes/logoHeader.php");
?>

<h1 class="text-center m-0 mt-2">Booking</h1>

<div class="p-2 m-3 bg-qGraa rounded-4">
    <form action="booking.php" method="post">
        <div class="mb-3">
            <label for="laneId">Vælg bane type</label>
            <select name="data[lane_id]" id="laneId" class="form-select shadow-sm" required>
                <option value="">Bane Type</option>
                <?php
                $sqlLane = "SELECT * FROM lanes";
                $lanes = $db->sql($sqlLane);
                foreach($lanes as $lane) {
                    ?>
                    <option value="<?php echo $lane->lane_id; ?>"><?php echo $lane->lane_name; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="firearm">Vælg våben type</label>
            <select class="form-select shadow-sm" id="firearm" name="data[firearm_id]" required>
                <option selected>Våben type</option>
                <?php
                $sqlFirearm = "SELECT * FROM firearms";
                $firearms = $db->sql($sqlFirearm);
                foreach($firearms as $firearm) {
                    ?>
                    <option value="<?php echo $firearm->firearm_id; ?>"><?php echo $firearm->firearm_name; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <!-- Name Input (Reverted to previous version) -->
        <div>
                <label for="name">Bookers navn</label>
            <input class="form-control shadow-sm" type="text" id="name" name="data[user_name]" required>
        </div>

        <!-- Reservation Time -->
        <div>
            <label class="mt-2" for="kalender">Dato og Tid</label>
            <input class="form-control shadow-sm" type="datetime-local" id="kalender" name="data[reservation_time]" required>
        </div>

        <div class="d-flex gap-2 mt-2">
            <label for="check_status">Checket ind</label>
            <input type="checkbox" id="check_status" name="data[check_status]" value="1" class="form-check m-0">
        </div>

        <div class="d-flex gap-2 mt-2">
            <label for="payment_check">Betalt</label>
            <input type="checkbox" id="payment_check" name="data[payment_status]" value="1" class="form-check m-0">
        </div>


        <!-- Submit Button -->
        <div class="m-2 mt-4">
            <button type="submit" class="btn btn-qRod fs-4 text-white">Book</button>
        </div>
    </form>

</div>

<?php
include("includes/navigation.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>