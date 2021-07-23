<?php
$minimo = $_POST['minimo']; //es la variable del minimo traida del input del formulario
$maximo = $_POST['maximo']; //es la variable del maximo traido del imput del formulario
if ($minimo!=null && $maximo!=null){ //esta condicion es para manejar el error si es que no se ingresan valores
    $suma = 0; //se define en 0 para utilizarse mas adelante
   for ($n=$minimo;$n<=$maximo;$n++){  //este es el ciclo que permite recorrer desde el minimo al maximo señalados por el usuario
       if($n % 2 != 0){ //En esta linea se determina cuales son los numeros impares
          $suma = $suma + $n; //se va sumando el ultimo numero con los anteriores
       }
   }
    echo "La sumatoria es: ". $suma; //se muestra la suma total
}else{
    echo "no se registran los limites"; //si no se ingresa ningun numero se muestra este mensaje
}
?>