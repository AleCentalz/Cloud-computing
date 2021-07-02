<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin Template · Bootstrap v5.0</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('css/signin.css') ?>">
</head>

<body class="text-center">

    <main class="container my-3 col-lg-4 col-sm-6">
        <form action="<?php echo site_url('login_controller/validation') ?>" method="POST">
            <img class="mb-4" src="<?php echo base_url('img/user-icon.png') ?>" alt="icono usuario" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
            <?php
            if (isset($msg)) {
                echo "<p class='mb-3'><small><em>" . $msg . "</em></small></p>";
            }
            ?>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                <label for="email">Correo electrónico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="pass" placeholder="Constraseña">
                <label for="pass">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>
</body>

</html>