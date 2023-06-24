<?php
    session_start();
    include 'conexion.php';
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    $_SESSION['usuario'] = $usuario;
    $_SESSION['clave'] = $clave;
    
    $instruccion = "insert into Usser values('$usuario','$clave')";
    
    mysqli_query($conexion,$instruccion);
    echo ' su usuario es: '.$usuario. ' y su contraseña es: '.$clave;
    header('location:register2.php');

?>