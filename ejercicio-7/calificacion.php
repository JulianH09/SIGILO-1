<?php
    $nombre = $_POST['nombre'];
    $asignatura = $_POST['asignatura'];
    $calificacion = $_POST['final'];

    if($calificacion >= 7){
        echo "Su nota final es " .$calificacion. ", Aprobado!";
    }else{
        echo "Su nota final es " .$calificacion. ", Reprobado!";
    }

?>