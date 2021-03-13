<?php
    require "../model/banco.php";
    $duplica = buscar_tarefa($conexao,$_GET['id']);
    var_dump($duplica);

    gravar_tarefa($conexao,$duplica);

    header('Location: ../tarefas.php');
?>