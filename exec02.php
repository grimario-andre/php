<?php
    echo "Utlizando arrays <br>";

    //array tipo colchetes
    //$semana = [];
    //$semana[] = 'seg'; $semana[] = 'ter'; $semana[] = 'qua';

    $semana = ['seg','ter','qua','qui','sex','sab','dom'];
    //exibir uma chave apenas
    echo "<P> $semana[6] </p>";

    //exibir todos os índices do array.
    for ($i=0; $i < 7; $i++) { 
        echo $semana[$i], " ";
    }
    
?>