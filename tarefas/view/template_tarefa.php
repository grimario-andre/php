<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <div class="bloco_principal">
        <h1>Tarefa:<?php echo $tarefa['nome']; ?></h1>
        <p>
            <a href="../index.php">
                Voltar para a lista de tarefas
            </a>
        </p>
        <p>
            <strong>Concluída:</strong>
            <?php echo traduz_para_sim_ou_nao($tarefa['concluida']); ?>
        </p>
        <p>
            <strong>Descrição:</strong>
            <?php echo $tarefa['descricao']; ?>
        </p>
        <p>
            <strong>Prazo:</strong>
            <?php echo traduz_data_para_exibir($tarefa['prazo']); ?>
        </p>
        <p>
            <strong>Prioridade:</strong>
            <?php echo traduz_prioridade($tarefa['prioridade']); ?>
        </p>
        <h2>Anexos</h2>
        <!-- lista de anexos -->
        <!-- formulário para um novo anexo -->
        <form action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Novo Anexo </legend>
                <input type="hidden" name="tarefa_id" value="<?php echo $tarefa['id']; ?>">
                <label for="">
                    <?php if ($tem_erros and array_key_exists('anexo', $erros_validacao)) : ?>
                        <span class="erro">
                            <?php echo $erros_validacao['anexo']; ?>
                        </span>
                    <?php endif; ?>
                    <input type="file" name="anexo" id="anexo">
                </label>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

    </div>
</body>

</html>