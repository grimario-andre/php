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
</body>

</html>