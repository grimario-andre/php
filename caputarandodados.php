<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturando dados com a superglobal $_GET</title>
</head>
<body>
    <form action="">
        Nome: <input type="text" name="nome" id="nome">
        <input type="submit" value="enviar" id="enviar">
    </form>
</body>
</html>

<?php
    if (array_key_exists('nome',$_GET)) {
        echo $_GET['nome'];
    }
?>