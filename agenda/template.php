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
            <fieldset>
                <label for="descricao">
                    Descrição (Opicional):
                    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                </label>
                <label for="data">
                    Data de Nascimento:
                    <input type="date" name="data" id="data">
                </label>
                <label for="favorito">
                    Salvar como favorito?
                    <input type="checkbox" name="favorito" id="favorito" value="sim" checked>
                </label>
            </fieldset>
            <label>
                <input type="submit" value="salvar" id="salvar">
            </label>
            
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Descrição</th>
            <th>Nascimento</th>
            <th>Favorito</th>
        </tr>

        <?php foreach ($lista_contatos as $contatinhos) : ?>
            <tr>
                <td><?php echo $contatinhos['nome']; ?></td>
                <td><?php echo $contatinhos['telefone']; ?></td>
                <td><?php echo $contatinhos['email']; ?></td>
                <td><?php echo $contatinhos['descricao']; ?></td>
                <td><?php echo $contatinhos['data']; ?></td>
                <td><?php echo $contatinhos['favorito']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>