<?php
$limite = $_POST['limite'];
    if($limite!=null){
        $fibonacci  = [0,1];
        for($i=2;$i<=$limite;$i++)
        {
            $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
        }

        echo join(' - ',$fibonacci);
    }else{
        echo 'no se ingreso un limite';
    }
?>