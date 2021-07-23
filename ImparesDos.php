<?php
$minimo = $_POST['minimo'];
$maximo = $_POST['maximo'];
if ($minimo!=null && $maximo!=null){
    $suma = 0;
    $num = 0;
   for ($n=$minimo;$n<=$maximo;$n++){
       if($n % 2 != 0){

          $suma = $suma + $n;

       }
   }
    echo "La sumatoria es: ". $suma;
}else{
    echo "no se registran los limites";
}
?>