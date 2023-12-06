<?php

    include 'conexion.php';

    $sql = "UPDATE usuarios SET nombre='Joksan Millet Rivera', email = 'jmillet2663@arecibointer.edu' WHERE id=1"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro actualizado con éxito"; 
    } else { 
        echo "Error actualizando el registro: ";
        echo  $conexion->error; 
    }

?>