<?php
    $valor = $_POST['valor'];

    $ganancia = $valor * 0.15;
    $total = $valor + $ganancia;

    if($valor > 0){
        echo "El producto es de " .$valor. " más su 15% que es " .$ganancia."<br>";
        echo "Para ganar el 15% de este producto deberia ser vendido en " .$total;
    }else{
        echo "Ingrese el valor del producto elegido ";
    }

?>