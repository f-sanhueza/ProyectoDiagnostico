<?php
$cantidad2 = $_POST['cantidad2'];
if ($cantidad2!=null){
    echo "Los pares son: ";
    $cantidad2=$cantidad2*2;
    for ($n=1;$n<=$cantidad2;$n++){
        if($n % 2 == 0){
            echo $n. " - ";
        }
    }
}else{
    echo "no se registro cantidad";
}

?>