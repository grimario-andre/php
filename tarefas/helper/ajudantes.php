<?php
#função traduz prioridade.
function traduz_prioridade($codigo){
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
    $partes = explode("/",$data);
    #verificar se quantidade indices é igual a 3.
    if (count($partes) != 3) {
        return $data;
    }

    $objeto_data = DateTime::createFromFormat('d/m/Y',$data);
    return $objeto_data->format('Y-m-d');
}

#função para exibir no formulário.
function traduz_data_para_exibir($data){
    if ($data == "" or $data == "0000-00-00") {
        return "";
    }
    $partes = explode("-",$data);
    #verificar se quantidade indices é igual a 3.
    if (count($partes) != 3) {
        return $data;
    }
    $objeto_data = DateTime::createFromFormat('Y-m-d',$data);
    return $objeto_data->format('d/m/Y');
}

#função para exibir concluída sim ou não.
function traduz_para_sim_ou_nao($concluida){
    if ($concluida == 1) {
        $exibi = "sim";
    }else{
        $exibi = "não";
    }
    echo $exibi;
}

#verificar existe o indice POST.
function tem_post(){
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}

function validar_data($data){
    $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    $resultado = preg_match($padrao,$data); # função compara se o texto bate com o padrão.

    if ($resultado == 0) {
        return false;
    }

    $dados = explode('/',$data);
    $dia = $dados[0];
    $mes = $dados[1];
    $ano = $dados[2];

    #regra de nogócio, o prazo para concluír a tarefa será até um ano.
    $objeto_data = Date('Y');
    if($ano < $objeto_data or $ano > $objeto_data){
        return false;
    }

    #usar funcção para checar se a data é válida.
    $resultado = checkdate($mes,$dia,$ano);

    return ($resultado);
}

#tratamento para anexos
function tratar_anexo($anexo){
    $padrao = '/^.+(\.pdf|\.zip)$/';
    $resultado = preg_match($padrao, $anexo['name']);

    if ($resultado == 0) {
        return false;
    }

    move_uploaded_file($anexo['tpm_name'], "../anexos/{$anexo['name']}");

    return true;
}
?>