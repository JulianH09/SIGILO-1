<?php
    $volantes = $_POST['volantes'];
    $posters = $_POST['posters'];
    $tarjeta = $_POST['tarjeta'];

    $vol = 2000;
    $pos = 5000;
    $tar = 500;

    $volantess = $volantes*$vol;
    $posterss = $posters*$pos;
    $tarjetass = $tarjeta*$tar;

    $suma = $volantess+$posterss+$tarjetass;

    echo  "volantes = " .$volantess. " ,posters = " .$posterss. " ,tarjetas = " .$tarjetass. " el total a pagar es " .$suma;

?>