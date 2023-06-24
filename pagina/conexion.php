<?php 
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "kiosco";

    $conexion = mysqli_connect($hostname, $usuariodb, $passworddb,$dbname)
    or die ("no se puede conectar". mysqli_connect_error());
?>