<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php traduz_data_para_exibir($tarefa['prazo']); ?></td>
                <td><?php traduz_prioridade($tarefa['prioridade']); ?></td>
                <td><?php echo $tarefa['concluida']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>