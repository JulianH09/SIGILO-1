<?php
    $valor = $_POST['valor'];

    $descuento = $valor * 0.2;
    $total = $valor - $descuento;

    if($valor > 20000){
        echo "Su producto cuesta " .$valor. " y tiene un descuento de " .$descuento ."<br>";
        echo "El total a pagar es " .$total;
    }else{
        echo " Su producto cuesta " .$valor. "<br>";
        echo "El total a pagar es " .$valor;
    }

?>