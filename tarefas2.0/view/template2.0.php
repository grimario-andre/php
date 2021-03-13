<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Gerenciador de Taferas 2.0</title>

</head>

<body>

    <table>
        <tr>
            <th>TAREFA</th>
            <th>PRIORIDADE</th>
            <th>DATA</th>
        </tr>
        <tr>
            <?php foreach($_COOKIE as $tarefas) :?>
                    <td><?php echo $tarefas['nome'];?></td>
                    <td><?php echo $tarefas['prioridade'];?></td>
                    <td><?php echo $tarefas['data'];?></td>
            <?php endforeach;?>
        </tr>
    </table>
</body>

</html>