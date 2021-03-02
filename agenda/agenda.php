<?php
    session_start();
    require "banco.php";
    require "ajudantes.php";
    #chamar o arquivo formulario.php
    require "formulario.php";
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
        
        if (array_key_exists('nascimento',$_GET)) {
            $agenda['nascimento'] = traduz_data_para_banco($_GET['nascimento']);
        } else {
            $agenda['nascimento'] = '';
        }
        
        if (array_key_exists('favorito',$_GET)) {
            $agenda['favorito'] = $_GET['favorito'];
        } else {
            $agenda['favorito'] = '';
        }

       gravar_contato($conexao,$agenda);
    }

    #criar array lista_contatos
    $lista_contatos = buscar_tarefas($conexao);

    #chamar o arquivo template.php
    include "template.php";
?>
