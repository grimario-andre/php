<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form action="">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label for="Tarefa">
                Tarefa:
                <input type="text" name="nome" id="nome">
            </label>
            <input type="submit" value="cadastrar" id="cadastrar">
        </fieldset>
    </form>
    <?php
        $lista_tarefas = [];

        if (array_key_exists('nome',$_GET)) {
            $lista_tarefas[] = $_GET['nome'];
        }
    ?>    
        <table>
            <tr>
                <th>Tarefas</th>
            </tr>    
                <?php foreach ($lista_tarefas as $tarefa):?>
                    <tr>
                        <td><?php echo $tarefa ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
</body>
</html>