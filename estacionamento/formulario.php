<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Ficha Estionamento</title>
</head>

<body>
    <h1>Formulário Vaga</h1>
    <form action="">
        <fieldset>
            <legend>Informações do Veículo</legend>
            <label for="placa">
                Placa: <input type="text" name="placa" id="placa" maxlength="7">
            </label>
            <label for="marca">
                Marca: <input type="text" name="marca" id="marca" maxlength="">
            </label>
            <label for="modelo">
                Modelo: <input type="text" name="modelo" id="modelo" maxlength="15">
            </label>

            <fieldset>
                <legend>Horário</legend>
                <label for="entrada">
                    Entrada: <input type="time" name="entrada" id="entrada">
                </label>
                <label for="saida">
                    Saída: <input type="time" name="saida" id="saida">
                </label>
            </fieldset>
            <label for="">
                <input type="submit" value="cadastrar">
            </label>
        </fieldset>
    </form>
</body>

</html>