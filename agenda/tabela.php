<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Agenda</title>
</head>

<body>
    <h1>Contatihos</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Descrição</th>
            <th>Nascimento</th>
            <th>Favorito</th>
            <th>Opções</th>
        </tr>

        <?php foreach ($lista_contatos as $contatinhos) : ?>
            <tr>
                <td><?php echo $contatinhos['nome']; ?></td>
                <td><?php echo $contatinhos['telefone']; ?></td>
                <td><?php echo $contatinhos['email']; ?></td>
                <td><?php echo $contatinhos['descricao']; ?></td>
                <td><?php traduz_data_para_exibir($contatinhos['nascimento']); ?></td>
                <td><?php exibi_marcado_favorito($contatinhos['favorito']); ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $contatinhos['id']?>">Editar</a> &nbsp;&nbsp;
                    <a href="remover.php?id=<?php echo $contatinhos['id']; ?>">Remover</a> &nbsp;&nbsp;
                    <a href="duplicar.php?id=<?php echo $contatinhos['id']; ?>">Duplicar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>