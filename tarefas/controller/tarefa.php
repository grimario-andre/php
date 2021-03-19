<?php  
include "../model/banco.php";
include "../helper/ajudantes.php";

$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    # upload de arquivos;
}

$tarefa = buscar_tarefa($conexao, $_GET['id']);

include "../view/template_tarefa.php";