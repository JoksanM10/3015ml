<?php

    include 'conexion.php';

    $sql = "INSERT INTO usuarios (nombre, email, clave) VALUES ('Joksan Millet', 'jmillet2663@arecibointer.edu', 'supersecreto')"; 
    if($conexion->query($sql) === TRUE) { 
        echo "Nuevo récord fue creado con éxito"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error; 
    }

?>