<?php 
    function con(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "kiosko";

    $conexion = mysqli_connect($servername, $username, $password,$base)
    or die ("no se puede conectar". mysqli_connect_error());
    return $conexion;
    }


?>