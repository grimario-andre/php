<?php  
include "../model/banco.php";
include "../helper/ajudantes.php";

$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    //upload de arquivos
    $tarefa_id = $_POST['tarefa_id'];
    if(! array_key_exists('anexo',$_FILES)){
        $tem_erros = true;
        $erros_validacao['anexo'] = 'Você deve selecionar um arquivo para anexar';
    }else {
        if (tratar_anexo($_FILES['anexo'])) {
            $nome = $_FILES['anexo']['name'];
            $anexo = [
                'tarefa_id' => $tarefa_id,
                'nome' => substr($nome,0,-4),
                'arquivo' => $nome,
            ];
        }else {
            $tem_erros = true;
            $erros_validacao['anexo'] = 'Envie anexos nos formatos zip ou pdf';
        }
    }

    #verificar se função tem_erros não é verdadeira.
    if(! $tem_erros){
        gravar_anexo($conexao,$anexo);
    }
}

$tarefa = buscar_tarefa($conexao, $_GET['id']);

include "../view/template_tarefa.php";