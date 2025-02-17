
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
            <p class="h2">Registrér</p>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center m-3 bg-qGraa p-2 flex-column">
            <p class="h4 d-flex justify-content-center">E-mail</p>
            <form>
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">E-mail adresse</label>
                    <input type="email" class="form-control shadow-sm" id="registerEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="registerPassword" class="form-label">Password</label>
                    <input type="password" class="form-control shadow-sm" id="registerPassword">
                </div>
                <button type="submit" class="btn btn-qRod text-white shadow-sm">Registrér</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
