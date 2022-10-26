<?php
    $her1 = $_POST['bro1'];
    $her2 = $_POST['bro2'];

    $difer1 = $her1 - $her2;
    $difer2 = $her2 - $her1;

    if($her1>$her2){
        echo "El hermano mayor tiene " .$her1. " con una diferencia de " .$difer1. " años de edad";
    }else{
        if($her1<$her2){
            echo "El hermano mayor tiene " .$her2. " con una diferencia de " .$difer2. " años de edad";
        }
    }


?>