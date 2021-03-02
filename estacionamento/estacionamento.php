<?php 
    session_start();
    require "formulario.php";
    $vaga = [];
    if (isset($vaga)) {
        if (array_key_exists('placa',$_GET)) {
            $vaga['placa'] = $_GET['placa'];
        }

        if (array_key_exists('marca',$_GET)) {
            $vaga['marca'] = $_GET['marca'];
        }

        if (array_key_exists('modelo',$_GET)) {
            $vaga['modelo'] = $_GET['modelo'];
        }

        if(array_key_exists('entrada',$_GET)){
            $vaga['entrada'] = $_GET['entrada'];
        }

        if (array_key_exists('saida',$_GET)) {
            $vaga['saida'] = $_GET['saida'];
        }
        
        $_SESSION['lista_vagas'][] = $vaga;

    }
          $lista_vaga = [];

        if (array_key_exists('lista_vagas',$_SESSION)) {
            $lista_vaga = $_SESSION['lista_vagas'];
        }
        
    include "template.php";
?>