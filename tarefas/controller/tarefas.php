<?php
session_start();
require "model/banco.php";
require "helper/ajudantes.php";

$exibir_tabela = true;
$tem_erros = false;
$erros_validacao = [];
#vefiricar se o indece 'nome' existe em $_GET
if (tem_post()) {
    $tarefa = [];

    #validar indice nome em POST.
    if (array_key_exists('nome',$_POST) and strlen($_POST['nome'] > 0)) {
        $tarefa['nome'] = $_POST['nome'];
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório';
    }
    
    #verificar se o índice 'descricao' existe em $_GET
    if (array_key_exists('descricao',$_POST)) {
        $tarefa['descricao'] = $_POST['descricao'];
    }else {
        $tarefa['descricao'] = '';
    }

    #verificar se o índice 'prazo' existe em $_GET
    if (array_key_exists('prazo',$_POST) and strlen($_POST['prazo']) > 0) { 
        /*necessário adicionar função traduzparaexibir e assim entrar no padrao solicitado pela função 
        validadata */
        $_POST['prazo'] = traduz_data_para_exibir($_POST['prazo']);
        if(validar_data($_POST['prazo'])){  
            $tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
        }else{
            $tem_erros =  true;
            $erros_validacao['prazo'] = 'O prazo não é uma data válida';
        }
    } else {
        $tarefa['prazo'] = '';
    }

    #índice 'prioridade' 
    $tarefa['prioridade'] = $_POST['prioridade'];

    #verificar se o índice 'concluída' existe em $_GET
    if (array_key_exists('concluida',$_POST)) {
        $tarefa['concluida'] = 1;
    } else {
        $tarefa['concluida'] = 0;
    }
    
    #gravar dados caso não haje erros.
    if (! $tem_erros) {
        gravar_tarefa($conexao,$tarefa);
        header('Location: index.php');
        die();
    }
}

$lista_tarefas = buscar_tarefas($conexao);

#retornar campos em branco para exibir os dados inseridos novamente no formulário.
$tarefa = [
    'id' => 0,
    'nome' => (array_key_exists('nome',$_POST)) ? $_POST['nome'] : '',
    'descricao' => (array_key_exists('descricao',$_POST)) ? $_POST['descricao'] : '',
    'prazo' => (array_key_exists('prazo',$_POST)) ? traduz_data_para_banco($_POST['prazo']) : '',
    'prioridade' => (array_key_exists('prioridade',$_POST)) ? $_POST['prioridade'] : 1,
    'concluida' => (array_key_exists('concluida',$_POST)) ? $_POST['concluida'] : ''
];

require "view/template.php";
?>
