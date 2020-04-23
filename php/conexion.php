<?php

    $servidor="localhost";
    $nombreBd="Jira Jirafa";
    $usuario="root";
    $pass="";
    $conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
    if($conexion -> error){
        die("no se puedo conectar");
    }
 ?>