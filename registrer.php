<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    // Prepare the SQL query to insert the data
    $sql = "INSERT INTO users (password, email, username) VALUES (:password, :email, :username)";
    $bind = [
        ":username" => $data["username"],
        ":email" => $data["email"],
        ":password" => $data["password"]
    ];

    try {
        // Execute the insert query
        $db->sql($sql, $bind, false);

        // Redirect to reset the form
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } catch (PDOException $e) {
        // Catch the error if there is a duplicate entry (unique constraint violation)
        if ($e->getCode() == 23000) {
            echo "Fejl: Denne email er allerede registreret. Vælg en anden email.";
        } else {
            // Handle other types of errors
            echo "Fejl: Der opstod en fejl under registreringen. Prøv igen.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Registrer</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="text-center bg-qBlaa ps-5 pe-5 pt-3 pb-3">
    <img src="images/whitelogo.png" class="img-fluid" alt="logo">
</div>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center m-3">
            <p class="h2">Registrér ny konto</p>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center m-3 bg-qGraa p-2 flex-column">
            <form action="registrer.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Brugernavn</label>
                    <input type="text" class="form-control shadow-sm" id="username" aria-describedby="username" maxlength="50" name="data[username]">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail adresse</label>
                    <input type="email" class="form-control shadow-sm" id="email" aria-describedby="email" name="data[email]">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control shadow-sm" id="password" aria-describedby="password" name="data[password]">
                </div>
                <button type="submit" class="btn btn-qRod text-white shadow-sm">Registrér</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>