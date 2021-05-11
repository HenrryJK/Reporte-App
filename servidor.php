<?php
    $conexion = new mysqli("localhost" , "root" , "root" , "bdreportes");
    if ($conexion ->connect_errno) {
        die("Error de conexion...!");
    }else{
        echo "Conexion Exitosa..!";
    }
?>