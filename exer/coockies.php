<?php
    setcookie('nome','Joao dos Santos', time()+ 3600);
    setcookie('Telefone', '021 13 991826694 ', time()+ 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Nós também podemos usar coockies para guardar informações que serão mantidas entre as requisições. Para isso, basta usar uma outra superglobal do php chamada $_COOKIE e a função setcookie(). Esta superglobal também é um array, assim como a $_SESSION.
    </p>
    <?php
        var_dump($_COOKIE);
    ?>
</body>
</html>