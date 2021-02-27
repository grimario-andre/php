<?php
    session_start();
    $lista = [];
    if (array_key_exists('nome',$_GET)) {
       if (isset($lista)) {
            $lista['nome'] = $_GET['nome'];
       }
       if (array_key_exists('prioridade',$_GET)) {
           $lista['prioridade'] = $_GET['prioridade'];
       }
       if (array_key_exists('data',$_GET)) {
           $lista['data'] = $_GET['data'];
       }

        #$_COOKIE vai receber o array $lista
        $_SESSION['lista_tarefas'][] = $lista; 
    }

    if (array_key_exists('lista_tarefas',$_SESSION)) {
        $_COOKIE = $_SESSION['lista_tarefas'];
    }
    
    #chamar o arquivo template2.0.php
    include "formulario2.0.php";
    #chamar o arquivo template2.0.php
    include "template2.0.php";
?>
  