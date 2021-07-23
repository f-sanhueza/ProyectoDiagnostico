<?php
$cantidad2 = $_POST['cantidad2'];
if ($cantidad2!=null){
    echo "Los pares son: ";
    $cantidad2=$cantidad2*2;
    for ($n=1;$n<=$cantidad2;$n++){// la diferencia de este metodo erradica en esta linea ya que comienza en el 1 y no en el 0 por lo solicitado
        if($n % 2 == 0){
            echo $n. " - ";
        }
    }
}else{
    echo "no se registro cantidad";
}

?>