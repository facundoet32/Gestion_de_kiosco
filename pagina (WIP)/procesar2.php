<?php
    include 'conexion.php';
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $usuario = $_REQUEST['usuario'];
    $dni = $_REQUEST['dni'];
    $telefono = $_REQUEST['telefono'];
    $direccion = $_REQUEST['direccion'];

    $instruccion = "insert into fieles values('$nombre', '$apellido', '$usuario',$dni,$telefono,'$direccion')";

    echo $instruccion;
    
    mysqli_query($conexion,$instruccion);
    header('location:index2.php');

?>