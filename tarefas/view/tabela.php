<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Gerenciador de tarefas</title>
</head>

<body>
    <div class="div">
        <table>
            <tr>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
                <th>Opções</th>
            </tr>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td>
                        <a href="controller/tarefa.php?id=<?php echo $tarefa['id']; ?>">
                            <?php echo $tarefa['nome']; ?>
                        </a>
                    </td>
                    <td><?php echo $tarefa['descricao']; ?></td>
                    <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
                    <td><?php echo $tarefa['prioridade']; ?></td>
                    <td><?php echo traduz_para_sim_ou_nao($tarefa['concluida']); ?></td>
                    <td><a href="controller/editar.php?id=<?php echo $tarefa['id']; ?>">
                            Editar
                        </a>
                        &nbsp
                        <a href="controller/remover.php?id=<?php echo $tarefa['id']; ?>">
                            Remover
                        </a>
                        &nbsp
                        <a href="controller/duplica.php?id=<?php echo $tarefa['id']; ?>">
                            Duplicar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>