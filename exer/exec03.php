<?php
    echo "Utlizando arrays <br>";

    $frutas = [];
    array_push($frutas, 'banana','pera','maçã','uva','jaca','melância');

    #echo $frutas[4],' ';

    //exibir todos os índices do arrays.
    for ($i=0; $i < 6; $i++) { 
        echo $frutas[$i], ' ';
    }
?>