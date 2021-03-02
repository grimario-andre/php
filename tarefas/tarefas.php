<?php
session_start();
require "banco.php";
require "ajudantes.php";
require "formulario.php";
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
        $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
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
    
    gravar_tarefa($conexao,$tarefa);
}

$lista_tarefas = buscar_tarefas($conexao);


#chamar o arquivo template.php
include "template.php";
?>
