<?php
require "settings/init.php";

// Define variables to store results
$resultMessage = '';
$resultType = ''; // Success or error message type (for styling if needed)

if (!empty($_POST["data"])) {
    $data = $_POST["data"];
    $inputUsername = trim($data["username"]);

    // Query for the user
    $sql = "SELECT username, password FROM users WHERE username = :username";
    $bind = [":username" => $inputUsername];
    $stmt = $db->sql($sql, $bind, false);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $inputPassword = trim($data["password"]);
        $storedHash = trim($user["password"]);

        // Temporary check for password verification (use password_verify() in production)
        if ($inputPassword === $storedHash) {
            // Redirect to forside.php on successful login
            header("Location: forside.php");
            exit(); // Make sure no further code is executed after redirect
        } else {
            $resultMessage = "Forkert password";
            $resultType = "error"; // Error message type (e.g., red text)
        }
    } else {
        $resultMessage = "Brugernavn ikkue fundet";
        $resultType = "error"; // Error message type (e.g., red text)
    }
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Login</title>

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
            <p class="h2">Log ind</p>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center m-3 bg-qGraa p-2 flex-column">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Brugernavn</label>
                    <input type="text" class="form-control shadow-sm" id="username" aria-describedby="username" maxlength="50" name="data[username]">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control shadow-sm" id="password" aria-describedby="password" name="data[password]">
                </div>
                <button type="submit" class="btn btn-qRod text-white shadow-sm">Log ind</button>
            </form>

            <?php if (!empty($resultMessage)): ?>
                <p class="<?php echo $resultType; ?> mt-2"><?php echo $resultMessage; ?></p>
            <?php endif; ?>

            <p class="mt-3 justify-content-center d-flex">Har du ingen konto? <br></p>
            <a class="d-flex mt-0 mb-3 justify-content-center" href="registrer.php">Klik her for at registrére en konto!</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>