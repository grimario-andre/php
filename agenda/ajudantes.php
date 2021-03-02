<?php
    #criar função para inserir da no banco.
    function traduz_data_para_banco($data){
        if ($data == "") {
            return "";
        }

        $dados = explode("/",$data);
        $data_banco = "{$dados[2]}{$dados[1]}{$dados[0]}";
        return $data_banco;
    }

    #criar funcao para exibir no formuário.
    function traduz_data_para_exibir($data){
        if ($data == "" or $data == "0000-00-00") {
            return "";
        }

        $dados = explode("-",$data);

        $data_exibi = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

        print_r($data_exibi);
    }

?>