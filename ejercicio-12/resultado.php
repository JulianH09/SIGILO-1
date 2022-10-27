<?php
    $valor = $_POST['vc'];
    
    $in1 = 0.02;
    $in2 = 0.045;
    $in3 = 0.07;

    $resultado = $valor * $in1;
    $resultado1 = $valor * $in2;
    $resultado2 = $valor * $in3;

    $suma1 = $valor + $resultado;
    $suma2 = $valor + $resultado1;
    $suma3 = $valor + $resultado2;

    echo "Valor registrado " .$valor. "<br>";

    if($valor < 500){
        echo "El interes es de " .$resultado. "<br>";
        echo "El total a pagar es " .$suma1;    
    }elseif($valor >= 500 && $valor < 1500){
        echo "El hay interes de " .$resultado1. "<br>";
        echo "El total a pagar es " .$suma2;
    }else{
        echo "El interes es de " .$resultado2 ."<br>";
        echo "El total a pagar es " .$suma3;    
    }
?>