<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 Além da função array_key_exists() que veirifca se existe um índice dentro de um array existe, já a função isset() além de fazer isso também verifica se uma varável foi definida ou não. 

<?php
    $tarefas = [
        'nome' => 'Comprar Cebolas ',
        'prioridade' => 'urgente'
    ];

    echo '<p> função array_key_exists() </p>';
    #função array_key_exists()
    if (array_key_exists('nome',$tarefas)) {
        echo 'Existe um índice na variável ', $tarefas;
    }else {
        echo 'Não existe índice nessa variável';
    }

    echo "<br><br><br>";

    echo '<p> função isset() </p>';
    # função isset()
    if (isset($tarefas['prioridade'])) {
        echo 'A vaiável tem um prioridade definida ';
    }
    else {
        echo 'A tarefa não tem uma prioridade definida ';
    }

    if (isset($pessoa)) {
        echo 'A variável ',$pessoa," não foi definida ";
    }else {
        echo 'A variável ',$pessoa,' não foi definida <br><br>';
    }

    echo 'Sempre utilize a função isset() para verificar a existência de variáveis e a função array_key_exists() para verificar se índices em arrays existem.  '
?>
</body>
</html>