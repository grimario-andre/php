<?php 
    session_start();
    require "banco.php";
    require "ajudantes.php";

    $exibir_tabela = false;

    if (array_key_exists('nome',$_GET) and $_GET['nome'] != '') {
        $tarefa = [];
        $tarefa['id'] = $_GET['id'];
        $tarefa['nome'] = $_GET['nome'];

        #usando operador ??
        $tarefa['descricao'] = $_GET['descricao'] ?? ''; 

        $tarefa['prazo'] = $_GET['prazo'] ?? '';
        
        $tarefa['prioridade'] = $_GET['prioridade'];

        if (array_key_exists('concluida',$_GET)) {
            $tarefa['concluida'] = 1;
        } else {
            $tarefa['concluida'] = 0;
        }

        editar_tarefa($conexao,$tarefa);
    }

    $tarefa = buscar_tarefa($conexao,$_GET['id']);

    require "template.php";
?>