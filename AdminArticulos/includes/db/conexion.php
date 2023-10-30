<?php

function conectarDB():mysqli{
    $db = mysqli_connect('localhost','root','root', 'inventarios');
    if(!$db){
        echo "No se ha realizado la conexion a la base de datos";
        exit;
        
    }
    return $db;
}

