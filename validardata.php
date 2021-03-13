<?php 
#explodir uma string e transformo-la em um array.
function validar_data($data){
    $partes = explode('/',$data);
    #contagem da string.
    if (count($partes) != 3) {
        return false;
    }
    # jogar o array em cada variável.
    $dia = $partes[0];
    $mes = $partes[1];
    $ano = $partes[2];
    # validar cada variável referente ao array data.
    if (strlen($dia) < 1 or strlen($dia) > 2) {
        return false;
    }
    if (strlen($mes) < 1 or strlen($mes) > 2) {
        return false;
    }
    if (strlen($ano) != 4) {
        return false;
    }

    return true;
}

?>