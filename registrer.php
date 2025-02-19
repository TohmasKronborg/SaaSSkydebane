<?php
/**
 * @var db $db
 */

require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO users (password, email, username) VALUES (:password, :email, :username)";
    $bind = [
        ":username" => $data["username"],
        ":email" => $data["email"],
        ":password" => $data["password"]
    ];

    try {
        $db->sql($sql, $bind, false);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } catch (PDOException $e) {
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
include("includes/logoHeaderLoginRegistrer.php");
?>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center m-3">
            <p class="h2">Registrér ny konto</p>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center m-3 bg-qGraa p-3 flex-column rounded-4">
            <form action="registrer.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Brugernavn</label>
                    <input type="text" class="form-control shadow-sm" id="username" aria-describedby="username" maxlength="50" name="data[username]" required placeholder="Skal udfyldes">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail adresse</label>
                    <input type="email" class="form-control shadow-sm" id="email" aria-describedby="email" name="data[email]" placeholder="Valgfrit">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control shadow-sm" id="password" aria-describedby="password" name="data[password]" required placeholder="Skal udfyldes">
                </div>
                <button type="submit" class="btn btn-qRod text-white shadow-sm">Registrér</button>
            </form>
            <p class="mt-3 justify-content-center d-flex">Har du allerede en konto?<br></p>
            <a class="d-flex mt-0 mb-3 justify-content-center" href="registrer.php">Klik her for at logge ind.</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>