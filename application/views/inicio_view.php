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
</head>

<style>
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
        line-height: 60px;
        background-color: #f5f5f5;
    }
</style>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand mx-3">Computo en la Nube U5</a>
        <form class="form-inline">
            <a href="<?php echo site_url('login_controller/logout') ?>" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cerrar sesion</a>
        </form>
    </nav>

    <container class="text-center">
        <h2 class="mt-4">
            Bienvenido/da <?php echo $this->session->nombre ?>
        </h2>
    </container>

    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">TecNM Campus Colima, Programación Web 2021.</span>
        </div>
    </footer>


</body>

</html>