<?php
    $aprendiz = $_POST['ap'];
    $materia = $_POST['mt'];
    $nt1 = $_POST['nt1'];
    $nt2 = $_POST['nt2'];
    $nt3 = $_POST['nt3'];

    $nota1 = $nt1 * 0.3;
    $nota2 = $nt2 * 0.3;
    $nota3 = $nt3 * 0.4;

    $final = $nota1+$nota2+$nota3;

    if($final >= 4.0){
        echo "Su nota final en " .$materia. " es " .$final. " Aprobado";
    }else{
        echo "Su nota final en " .$materia. " es " .$final. " Reprobado";
    }

?>