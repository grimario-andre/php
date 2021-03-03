<?php
session_start();
require "banco.php";
require "formulario.php";
require "ajudantes.php";
$vaga = [];
if (isset($vaga)) {
    if (array_key_exists('placa', $_GET)) {
        $vaga['placa'] = $_GET['placa'];
    }

    if (array_key_exists('marca', $_GET)) {
        $vaga['marca'] = $_GET['marca'];
    }

    if (array_key_exists('modelo', $_GET)) {
        $vaga['modelo'] = $_GET['modelo'];
    }

    if (array_key_exists('entrada', $_GET)) {
        $vaga['entrada'] = $_GET['entrada'];
    }

    if (array_key_exists('saida', $_GET)) {
        $vaga['saida'] = $_GET['saida'];
    }

    registra_vaga($conexao,$vaga);
}

$lista_vagas = exibir_vagas($conexao);

include "template.php";
?>
