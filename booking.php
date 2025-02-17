<?php
/**
 * @var db $db
 */

require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST['data'];

    // Ensure that other required fields are set
    if (isset($data["user_name"], $data["lane_id"], $data["firearm_id"], $data["reservation_time"])) {

        // Check if the checkboxes are checked and set them to 1 if checked, 0 if not
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

        // Execute SQL query
        $db->sql($sql, $bind, false);

        // Confirmation message
        echo "Booking added! <a href='forside.php'>Til forside</a>";
        exit;
    } else {
        // Handle missing required fields (optional)
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
<body class="d-flex flex-column">

<div class="text-center bg-qBlaa pb-3 pt-3">
    <img src="images/whitelogo.png" class="img-fluid" alt="logo" width="179" height="75">
</div>

<div class="container-fluid mt-3 mb-3">
    <h1 class="text-center">Booking</h1>
    <form action="booking.php" method="post">
        <div class="mb-3">
            <label for="laneId">Vælg bane type</label>
            <select name="data[lane_id]" id="laneId" class="form-select">
                <option value="1">50 meter Udendørs</option>
                <option value="2">100 meter Udendørs</option>
                <option value="3">50 meter Indendørs</option>
                <option value="4">100 meter Indendørs</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="firearm">Vælg våben type</label>
            <select class="form-select" id="firearm" name="data[firearm_id]" required>
                <option selected>Våben type</option>
                <option value="1">Luftgevær</option>
                <option value="2">Luftpistol</option>
                <option value="3">Salonriffel</option>
                <option value="4">Grov kaliber</option>
                <option value="5">Salonpistol</option>
                <option value="6">Grovpistol</option>
            </select>
        </div>

        <!-- Name Input (Reverted to previous version) -->
        <div>
            <label class="mt-2" for="name">Navn</label>
            <input class="form-control" type="text" id="name" name="data[user_name]">
        </div>

        <!-- Reservation Time -->
        <div>
            <label class="mt-2" for="kalender">Kalender</label>
            <input class="form-control" type="datetime-local" id="kalender" name="data[reservation_time]" required>
        </div>

        <label for="check_status" class="mt-2">Check Status</label>
        <input type="checkbox" id="check_status" name="data[check_status]" value="1">

        <label for="payment_check" class="mt-2">Payment Status</label>
        <input type="checkbox" id="payment_check" name="data[payment_status]" value="1">

        <!-- Submit Button -->
        <div class="col-12 d-flex justify-content-center mt-2">
            <button type="submit" class="btn btn-qBlaa">Submit</button>
        </div>
    </form>

</div>

<?php
include("includes/navigation.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>