<?php

session_start();

if (isset($_SESSION['ra'])) {
    if ($_SESSION['ra'] == "211140865") {
        header("Location: http://localhost/ra21114086-5/view/cursos.php");
        exit;
    };
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MAPA</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center container d-flex align-items-center justify-content-center bg-dark" style="height: 100vh;">
<form class="form-signin" style="width: 30%" action="./controllers/login.php" method="POST">
    <h1 class="h5 mt-4 font-weight-bold text-primary">RA</h1>
    <label for="number-ra" class="sr-only">RA</label>
    <input type="text" name="number-ra" id="number-ra" class="mt-3 form-control" placeholder="211140865" required autofocus>
    <h1 class="h5 mt-4 mb-2 font-weight-bold text-primary">Senha</h1>
    <label for="password" class="sr-only">Senha</label>
    <input type="password" name="password" id="password" class="mt-3 form-control" placeholder="Jonatan" required>
    <button class="mt-4 btn btn-lg btn-secondary btn-block" type="submit">Login</button>
</form>
</body>
</html>