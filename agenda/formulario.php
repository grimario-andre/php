<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário Agenda</title>
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
                <label for="nascimento">
                    Data de Nascimento:
                    <input type="date" name="nascimento" id="nascimento">
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
</body>

</html>