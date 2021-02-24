<?php
    session_start();
    $agenda = [];
    #Verificar se o índice nome existe em $_GET
    if (array_key_exists('nome', $_GET)) {
        
        $agenda['nome'] = $_GET['nome'];

        #verificar se existe os índeces do formulário
        if (array_key_exists('telefone',$_GET)) {
            $agenda['telefone'] = $_GET['telefone'];
        } else {
            echo "Não é possível adicionar um contatinho sem número. ";
        }
        
        if (array_key_exists('email',$_GET)) {
            $agenda['email'] = $_GET['email'];
        } else {
            $agenda['email'] = '';
        }

        if (array_key_exists('descricao',$_GET)) {
            $agenda['descricao'] = $_GET['descricao'];
        } else {
            $agenda['descricao'] = '';
        }
        
        if (array_key_exists('data',$_GET)) {
            $agenda['data'] = $_GET['data'];
        } else {
            $agenda['data'] = '';
        }
        
        if (array_key_exists('favorito',$_GET)) {
            $agenda['favorito'] = $_GET['favorito'];
        } else {
            $agenda['favorito'] = '';
        }

        #$_SESSION vai receber o array $agenda
        $_SESSION['lista_contatos'][] = $agenda;
    }else{
        echo "Não é possível adicionar um contatinho sem nome. ";
    }

    #criar array lista_contatos
    $lista_contatos = [];

    if (isset($lista_contatos)) {
        if (array_key_exists('lista_contatos', $_SESSION)) {
            $lista_contatos = $_SESSION['lista_contatos']; 
        }
    } 

    #chamar o arquivo template.php
    include "template.php";
?>
