<?php session_start() ;?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <p>
    O php trabalha principalmente com web e, neste caso, o que acontece a cada nova requisição que fazemos, seja pedindo uma página ou enviando dados, é que o php interpreta tudo de novo e devolve apenas html para o navegador. OU seja, ele não lembra do que aconteceu na última requisição feita.</p>
    <p>
    A cada nova requisição feita o php processa tudo de novo e não guarda as variáveis para outros acessos. Isso é um problema para a nossa aplicação, nem tudo esta perdido! O php tem um recurso que no auxiliará a solucionar isso.
    </p>
    <p>
    Para isso vamos usar uma outra variável superglobal: $_SESSION, mas para usa-la é necessário chamar a função session_start() no inicio do arquivo.
    </p>

    <form action="">
        Nome: <input type="text" name="nome" id="nome">
        <input type="submit" value="enviar" id="enviar">
    </form>

    <?php 
        if (array_key_exists('nome',$_GET)) {
            $_SESSION['lista'][] = $_GET['nome'];
        }

        #print_r($_SESSION['lista']);
        $lista = [];

        if (array_key_exists('lista',$_SESSION)) {
            $lista = $_SESSION['lista'];   
        }
    ?>
    
    <?php foreach($lista as $list) :?>
        <?php echo $list ;?>
    <?php endforeach ;?>

        <p>
        Como funcionam as sessões no php?
        Se o php não consegue quardar dados entre as requisições, como ele faz para manter as sessões?
        Ele utliza um coockie, que por padão é chamando de PHPSESSID. Procure como acessar os coockies no seu navegador, e você acahrá um com esse nome para URL de desenvolvimento usada, localhost.
        </p>
        <p>    
        Nesse coockie, o PHP guardará apenas uma chave que define a identeificação da sessão, mas não os dados da sessão. Estes ficam guardados no servidor e o PHP vai usar a chave guardada no coockie para recuperar as informações a cada requisição.
        </p>
        <p>
            Um pouco mais sobre as sessões no PHP

            Se colocamos os dados na sessão, por que eles não aparecem em outro navegador?

            Lembra de que para o php saber qual usuário é o dono de um sessão, ele guarda algumas informações no cookies do nevegador? Pois então, para cada usuário (ou para cada navegador) acessando a página, o php gerará um número de identificação único para guardar no coockie PHPSESSID.
            Então, quando usamos um outro navegador, temos um outro número de sessão e, por isso, uma nova lista de tarefas.
        </p>
</body>
</html>