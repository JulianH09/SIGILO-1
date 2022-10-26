<?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nombre = $_POST['nombre'];
    $materia = $_POST['asignatura'];
    $divisor = 3;
    $operacion = ($nota1+$nota2+$nota3)/$divisor;

    echo "El promedio de " .$nombre. " en " .$materia. " es " .$operacion;

?>