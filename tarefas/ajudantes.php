<?php
#função traduz prioridade.
function traduz_prioridade($codigo)
{
    $prioridade = '';
    switch ($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }

    print_r($prioridade);
}

#função traduz data para inserir no banco.
function traduz_data_para_banco($data){
    if ($data == '') {
        return '';
    }

    $dados = explode("/",$data);

    $data_banco = "{$dados[2]}{$dados[1]}{$dados[0]}"; #não usar seperor (-) na reconstrução da string.

    return $data_banco;
}

#função para exibir no formulário.
function traduz_data_para_exibir($data){
    if ($data == "" or $data == "0000-00-00") {
        return "";
    }

    $dados = explode("-",$data);

    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    print_r($data_exibir);
}
?>
