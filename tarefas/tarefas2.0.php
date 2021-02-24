<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Gerenciador de Taferas 2.0</title>

</head>

<body>
    <h1>Gerenciador de Tarefas 2.0</h1>
    <form action="">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="Tarefa">
                Tarefa: <input type="text" name="nome" id="nome">
            </label>
            <br>
            <label for="Prioridade">
                Prioridade: <input type="number" name="prioridade" id="prioridade" max="3" min="1">
            </label>
            <br>
            <label for="Data">
                Data: <input type="date" name="data" id="data">
            </label>
            <input type="submit" value="cadastrar">
        </fieldset>
    </form>

    <?php

    if (array_key_exists('nome',$_GET)) {
        $_SESSION['lista'][] = $_GET['nome'];
    }
    if (array_key_exists('prioridade',$_GET)) {
        $_SESSION['lista'][] = $_GET['prioridade'];
    }
    if (array_key_exists('data',$_GET)) {
        $_SESSION['lista'][] = $_GET['data'];
    }

    $_COOKIE = $_SESSION;

    ?>
    <pre>
        <?php var_dump($_COOKIE); ?>
    </pre>
    <table>
        <tr>
            <th>TAREFA</th>
            <th>PRIORIDADE</th>
            <th>DATA</th>
        </tr>
        <tr>
            <?php foreach($_COOKIE as $tarefas) :?>
                    <td><?php echo $tarefas ;?></td>
            <?php endforeach;?>
        </tr>

    </table>
</body>

</html>