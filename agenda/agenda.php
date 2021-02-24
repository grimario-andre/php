<?php session_start() ;?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda Contatinhos</h1>
    <form action="">
        <fieldset>
            <legend>Novo contato</legend>
            <label for="nome">
                Contato: <input type="text" name="nome" id="nome">
            </label>
            <label for="telefone">
                Telefone: <input type="tel" name="telefone" id="telefone" maxlength="15">
            </label>
            <label for="email">
                Email: <input type="email" name="email" id="email" maxlength="75">
            </label>
            <input type="submit" value="salvar" id="salvar">
        </fieldset>
    </form>

    <?php 

        if (array_key_exists('nome',$_GET)) {
            $_SESSION['lista'][] = $_GET['nome'];
        }
        if (array_key_exists('telefone',$_GET)) {
            $_SESSION['lista'][] = $_GET['telefone'];
        }
        if (array_key_exists('email',$_GET)){
            $_SESSION['lista'][] = $_GET['email'];
        }
        
        $agenda = [];

        if (isset($agenda)) {
            if (array_key_exists('lista',$_SESSION)) {
                $agenda = $_SESSION['lista'];
            }
        }

      print_r($agenda);
    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>
        <tr>
            <?php /* foreach($agenda as $contatinhos) :?>
                <td><?php echo $contatinhos ;?></td>
            <?php endforeach */ ;?>
        </tr>
    </table>
</body>
</html>