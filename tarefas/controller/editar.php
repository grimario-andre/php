<?php
session_start();
require "../model/banco.php";
require "../helper/ajudantes.php";

$exibir_tabela = false;
$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    $tarefa = [];
    if (array_key_exists('nome', $_POST) and strlen($_POST['nome']) > 0) {
        $tarefa['id'] = $_POST['id'];
        $tarefa['nome'] = $_POST['nome'];
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obirgatório';
    }
    #usando operador ??
    if (array_key_exists('descricao', $_POST)) {
        $tarefa['descricao'] = $_POST['descricao'] ?? '';
    }

    if (array_key_exists('prazo', $_POST) and strlen($_POST['prazo']) > 0) {
        $_POST['prazo'] = traduz_data_para_exibir($_POST['prazo']);
        if (validar_data($_POST['prazo'])) {
            $tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
        } else {
            $tem_erros = true;
            $erros_validacao = 'O prazo não é uma data valida';
        }
    }

    if (array_key_exists('prioridade', $_POST)) {
        $tarefa['prioridade'] = $_POST['prioridade'];
    }

    if (array_key_exists('concluida', $_POST)) {
        $tarefa['concluida'] = 1;
    } else {
        $tarefa['concluida'] = 0;
    }
    
    if (! $tem_erros) {
        editar_tarefa($conexao, $tarefa);
        header('Location: ../index.php');
        die();
    }
}

$tarefa = buscar_tarefa($conexao, $_GET['id']);

#verificar se há dados no POST
$tarefa['nome'] = (array_key_exists('nome',$_POST)) 
    ? $_POST['nome'] : $tarefa['nome'];
$tarefa['descricao'] = (array_key_exists('descricao',$_POST)) 
    ? $_POST['descricao'] : $tarefa['descricao'];
$tarefa['prazo'] = (array_key_exists('prazo', $_POST))
     ? $_POST['prazo'] : $tarefa['prazo'];
$tarefa['prioridade'] = (array_key_exists('prioridade', $_POST)) 
    ? $_POST['prioridade'] : $tarefa['prioridade'];
$tarefa['concluida'] =  (array_key_exists('concluida', $_POST)) 
    ? $_POST['concluida'] : $tarefa['concluida'];

    var_dump($tarefa);
    require "../view/template.php";
