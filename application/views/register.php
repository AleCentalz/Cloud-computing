<body>
    <h1>Registro</h1>
    <form>
        <label for="fname">Nombre:</label>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Apellidos:</label>
        <input type="text" id="lname" name="lname"><br>
        <label for="ncontrol">no.Control:</label>
        <input type="text" id="ncontrol" name="ncontrol"><br>
        <label for="email">Correo TecNM:</label>
        <input type="email" id="email" name="email"><br>
        <label for="pasw">Contraseña:</label>
        <input type="password" id="pasw" name="pasw"><br>
        <input class="button" type="submit" value="Registrarse">
    </form>
    <a href="<?php echo site_url('Menu_Controller/menu') ?>">Atrás</a>
