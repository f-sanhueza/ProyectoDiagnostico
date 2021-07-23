<?php
$cantidad = $_POST['cantidad'];//Es la variable que señala cual es la cantidad de numeros pares que quiere ver el usuario
    if($cantidad!=null){ //esta condicion es para manejar el error si es que el usuario no ingresa numeros
        echo "Los pares son: ";
        $cantidad = $cantidad*2; //en esta parte la cantidad se multiplica por dos ya que el for tambie cuenta los impares
        for ($n=0;$n<$cantidad;$n++){ //se define el minimo estatico y maximo varia segun la cantidad de numeros que solicite el usuario
            if($n % 2 == 0){ //esta condicion filtra los numeros que son pares
                echo $n. " - "; //se muestran los numeros pares
            }
        }
    }else{
        echo "no se registro cantidad"; //si esque no se ingresa ningun numero se mostrara este mensaje
    }
?>