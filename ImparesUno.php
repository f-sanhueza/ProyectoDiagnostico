<?php
$limite = $_POST['limite'];
if ($limite!=null){
    $suma = 0;
    for ($n=0;$n<=$limite;$n++){
        if($n % 2 != 0){
            $suma = $suma + $n;
        }
    }
    echo "La sumatoria es:".$suma."";
}else{
    echo "no se registro un limite";
}
?>