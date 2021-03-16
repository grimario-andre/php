<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <p>
        O uso da instrução 'include', que serve para incluir o conteúdo de outro arquivo no fluxo atual.
        O legal do 'include é que ele adiciona o outro arquivo, e todas as varáveis e funções do arquivo atual continuam valendo no arquivo incluído'. Por isso podemos, neste caso, incluir um aruqivo com apenas o template do formulário de cadastro de tarefas e alista de tarefas, e ainda podemos continuar usando a 'variável $lista_tarefas, que foi definida no arquivo tarefas.php e que contém um array com as tarefas cadastradas'.
    </p>
    <?php
        #include caminho/nome_da_pagina; 
    ?>
</body>
</html>