<?php
require "banco.php";
require "ajudantes.php";

$exibir_tabela = false;

if (array_key_exists('nome', $_GET) and $_GET['nome'] !=  '') {
    $contato = [];
    $contato['id'] = $_GET['id'];
    $contato['nome'] = $_GET['nome'];

    $contato['telefone'] = $_GET['telefone'] ?? '';

    $contato['email'] = $_GET['email'] ?? ' ';

    $contato['descricao'] = $_GET['descricao'] ?? '';

    $contato['nascimento'] = traduz_data_para_banco($_GET['nascimento']) ?? '';

    if (array_key_exists('favorito', $_GET)) {
        $contato['favorito'] = 1;
    } else {
        $contato['favorito'] = 0;
    }

    editar_contato($conexao,$contato);
    header('Location: agenda.php');
    die();
}

$contato = busca_contato($conexao,$_GET['id']);

require "template.php";
?>
