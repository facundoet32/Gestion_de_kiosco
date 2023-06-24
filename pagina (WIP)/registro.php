<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap');
        </style>
    <title>Login</title>
</head>
<body>
<?php
    session_start();

    if( isset($_SESSION['usuario'])){
        echo $_SESSION['usuario']."   ".$_SESSION['clave'];

    }


?>
    <section class="login">
        <h4> Login </h4>
        <form action="procesar1.php" method="post">
            <input class="secundario" type="usuario" name="usuario" id="usuario" placeholder="ingrese un usuario">
            <input class="secundario" type="password" name="clave" id="clave" placeholder="ingrese una contraseña">
            <input class="bot" type="submit" value="registrarse">
        </form>
    </section>
</body>
</html>