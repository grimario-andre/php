<?php
session_start();
#vefiricar se o indece 'nome' existe em $_GET
if (array_key_exists('nome', $_GET) and $_GET['nome'] != '') {
    $tarefa = [];

    $tarefa['nome'] = $_GET['nome'];

    #verificar se o índice 'descricao' existe em $_GET
    if (array_key_exists('descricao',$_GET)) {
        $tarefa['descricao'] = $_GET['descricao'];
    }else {
        $tarefa['descricao'] = '';
    }

    #verificar se o índice 'prazo' existe em $_GET
    if (array_key_exists('prazo',$_GET)) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = '';
    }

    #índice 'prioridade' 
    $tarefa['prioridade'] = $_GET['prioridade'];

    #verificar se o índice 'concluída' existe em $_GET
    if (array_key_exists('concluida',$_GET)) {
        $tarefa['concluida'] = $_GET['concluida'];
    } else {
        $tarefa['concluida'] =  '';
    }
    
    #$_SESSION vai receber tarefas
    $_SESSION['lista_tarefas'][] = $tarefa;
}

#print_r($_SESSION['lista_tarefas']);
$lista_tarefas = [];

if (array_key_exists('lista_tarefas', $_SESSION)) {
    $lista_tarefas  = $_SESSION['lista_tarefas'];
}

#chamar o arquivo fomrulario.php
include "formulario.php";
#chamar o arquivo template.php
include "template.php";
?>
