<?php
    $valor = $_POST['vc'];
    
    $in1 = 0.02;
    $in2 = 0.045;
    $in3 = 0.07;

    $resultado = $valor * $in1;
    $resultado1 = $valor * $in2;
    $resultado2 = $valor * $in3;

    echo "Valor registrado " .$valor. "<br>";

    if($valor < 500){
        echo "El interes es de " .$resultado;
    }elseif($valor >= 500 && $valor < 1500){
        echo "El hay interes de " .$resultado1;
    }else{
        echo "El interes es de " .$resultado2;
    }
?>