<?php
    $equipo = $_POST['equipo'];
    $gano = $_POST['ganados'];
    $empato = $_POST['empate'];
    $perdio = $_POST['perdidos'];
    
    $pg = 3;
    $pe = 1;
    $pp = 0;
    
    $ganaron = $gano*$pg;
    $empataron = $empato*$pe;
    $perdieron = $perdio*$pp;

    $operacion = $ganaron+$empataron+$perdieron;

    echo "El equipo " .$equipo. " tiene un total de " .$operacion. " puntos";

?>