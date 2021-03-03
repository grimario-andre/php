<?php
#criar função para inserir da no banco.
function traduz_data_para_banco($data){
    if ($data == "") {
        return "";
    }

    return;
}

#criar funcao para exibir no formuário.
function traduz_data_para_exibir($data){
    if ($data == "" or $data == "0000-00-00") {
        return "";
    }

    $objeto_data = DateTime::createFromFormat('Y-m-d',$data);
    print_r($objeto_data->format('d/m/Y'));
}

#criar função para exibir marcado como favorito.
function exibi_marcado_favorito($favorito){
    if ($favorito == 1) {
        $favorito = "sim";
    }else{
        $favorito = "não";
    }
    print $favorito;
}
?>