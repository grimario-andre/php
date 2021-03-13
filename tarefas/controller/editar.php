<?php
session_start();
require "../model/banco.php";
require "../helper/ajudantes.php";

$exibir_tabela = false;

if (array_key_exists('nome', $_POST) and $_POST['nome'] != '') {
    $tarefa = [];
    $tarefa['id'] = $_POST['id'];
    $tarefa['nome'] = $_POST['nome'];

    #usando operador ??
    if (array_key_exists('descricao', $_POST)) {
        $tarefa['descricao'] = $_POST['descricao'] ?? '';
    }

    if (array_key_exists('prazo', $_POST)) {
        $tarefa['prazo'] = $_POST['prazo'] ?? '';
    }

    if (array_key_exists('prioridade', $_POST)) {
        $tarefa['prioridade'] = $_POST['prioridade'];
    }
    
    if (array_key_exists('concluida', $_POST)) {
        $tarefa['concluida'] = 1;
    } else {
        $tarefa['concluida'] = 0;
    }

    editar_tarefa($conexao, $tarefa);
    header('Location: ../tarefas.php');
    die();
}

$tarefa = buscar_tarefa($conexao, $_POST['id']);

require "../view/template.php";
?>
