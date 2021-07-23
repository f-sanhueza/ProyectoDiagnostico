<?php
$limite = $_POST['limite']; //es la variable del limite traida del input del formulario
if ($limite!=null){ //esta condicion es para manejar el error si es que no se ingresan valores
    $suma = 0; // se declara para luego usarse mas adelante
    for ($n=0;$n<=$limite;$n++){ //el ciclo para sumar los impares hasta el numero designado por el usuario
        if($n % 2 != 0){ //esta condicion filtra a los numero impares
            $suma = $suma + $n; //se va sumando el ultimo numero con los anteriores
        }
    }
    echo "La sumatoria es:".$suma.""; //se muestra la sumatoria final
}else{
    echo "no se registro un limite"; //si no se ingresa un limite se muestra este mensaje
}
?>