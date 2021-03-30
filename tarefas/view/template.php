<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Gerenciador de Tarefas</title>
</head>

<body class="container">
    <div id="divh1">
        <h1>Gerenciador de Tarefas</h1>
    </div>
    
    <?php require 'formulario.php'; ?>
    <?php if ($exibir_tabela) : ?>
        <?php require 'tabela.php'; ?>
    <?php endif; ?>
</body>

</html>