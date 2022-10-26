<?php
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];

    if($sexo == "F" && $edad > 54){
        echo "Te puedes jubilar";
    }elseif($sexo == "M" && $edad >= 63){
        echo "Te puedes jubilar";
    }else{
        echo "No te puedes jubilar";
    }
?>