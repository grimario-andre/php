<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço foreach</title>
</head>
<body>
    Já vimos o laço while, então agora é aprensatado o laço foreach. Esta laço server para passar por todos os índices de um array, atribuindo cada índice a uma variável qye escolhemos, no caso, a variável $tarefa.

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
            <?php foreach ($lista_tarefas as $tarefas) :?>
                <tr>
                    <td><?php echo $tarefas ;?> </td>
                </tr>
            <?php endforeach ;?>
    </table>

    <?php while ($a <= 10) :?>
        <?php echo 'Laço while'; ?>
    <?php endwhile ;?>
</body>
</html>