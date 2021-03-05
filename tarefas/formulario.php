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
        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">

        <fieldset>
            <legend>Nova tarefa</legend>
            <label for="nome">
                Tarefa:
                <input type="text" name="nome" id="nome" value="<?php echo $tarefa['nome']; ?>" >
            </label>
            <label for=" descricao">
                Descrição (Opcional):
                <textarea name="descricao" id="descricao" cols="30" rows="10">
                    <?php echo $tarefa['descricao']; ?>
                </textarea>
            </label>
            <label for="prazo">
                Prazo (Opcional):
                <input type="date" name="prazo" id="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label for="prioridade">
                    <input type="radio" name="prioridade" id="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'Checked' : ''; ?>> Baixa
                    <input type="radio" name="prioridade" id="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'Checked' : ''; ?>> Média
                    <input type="radio" name="prioridade" id="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'Checked' : ''; ?>> Alta
                </label>
            </fieldset>
            <label for="concluida">
                Tarefa concluída:
                <input type="checkbox" name="concluida" id="concluida" value="1" <?php echo ($tarefa['concluida'] == 1)? 'Checked' : ''; ?>>
            </label>
            <input type="submit" id="cadastrar" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'cadastrar'; ?>">
        </fieldset>
    </form>

</body>

</html>