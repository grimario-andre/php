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
            </php echo traduz_concluida($tarefa['concluida']); ?>
        </p>
        <p>
            <strong>Descrição:</strong>
            </php echo n12br($tarefa['descricao']); ?>
        </p>
        <p>
            <strong>Prazo:</strong>
            </php echo traduz_data_para_exibir($tarefa['concluida']); ?>
        </p>
        <p>
            <strong>Prioridade:</strong>
            </php echo traduz_prioridade($tarefa['concluida']); ?>
        </p>
        <h2>Anexos</h2>
        <!-- lista de anexos -->
        <!-- formulário para um novo anexo -->
    </div>
</body>
</html>