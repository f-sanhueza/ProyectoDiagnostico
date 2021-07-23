<?php
$cantidad = $_POST['cantidad'];
    if($cantidad!=null){
        echo "Los pares son: ";
        $cantidad = $cantidad*2;
        for ($n=0;$n<$cantidad;$n++){
            if($n % 2 == 0){
                echo $n. " - ";
            }
        }
    }else{
        echo "no se registro cantidad";
    }
?>