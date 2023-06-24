<?php
    include 'conexion.php';
    $nombre = $_REQUEST['usuario'];
    $apellido = $_REQUEST['clave'];

    $instruccion = "insert into Usser values('$usuario', '$clave')";

    echo $instruccion;
    
    mysqli_query($conexion,$instruccion);
    header('location:login.php');

?>