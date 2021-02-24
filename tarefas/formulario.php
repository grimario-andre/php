<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulário Tarefas</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <form action="">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label for="nome">
                Tarefa:
                <input type="text" name="nome" id="nome">
            </label>
            <label for="descricao">
                Descrição (Opcional):
                <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            </label>
            <label for="prazo">
                Prazo (Opcional):
                <input type="date" name="prazo" id="prazo">
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label for="prioridade">
                    <input type="radio" name="prioridade" id="prioridade" value="baixa" checked> Baixa
                    <input type="radio" name="prioridade" id="prioridade" value="media"> Média
                    <input type="radio" name="prioridade" id="prioridade" value="alta"> Alta
                </label>
            </fieldset>
            <label for="concluida">
                Tarefa concluída:
                <input type="checkbox" name="concluida" id="concluida" value="sim">
            </label>
            <input type="submit" value="cadastrar" id="cadastrar">
        </fieldset>
    </form>

</body>

</html>