<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket da Vaga</title>
</head>

<body>
    <table>
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Entrada</th>
            <th>Saída</th>
        </tr>
        <?php foreach($lista_vaga as $vagas) :?>
            <tr>
                <td><?php echo $vagas['placa'];?></td>
                <td><?php echo $vagas['marca'];?></td>
                <td><?php echo $vagas['modelo'];?></td>
                <td><?php echo $vagas['entrada'];?></td>
                <td><?php echo $vagas['saida'];?></td>
            </tr>
        <?php endforeach ;?>
    </table>
</body>

</html>