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
            <label>
                <input type="hidden" name="id" id="id" value="<?php echo $contato['id']; ?>">
            </label>
            <label for="nome">
                Contato: <input type="text" name="nome" id="nome" value="<?php echo $contato['nome']; ?>">
            </label>
            <label for="telefone">
                Telefone: <input type="tel" name="telefone" id="telefone" maxlength="15" value="<?php echo $contato['telefone']; ?>">
            </label>
            <label for="email">
                Email: <input type="email" name="email" id="email" maxlength="75" value="<?php echo $contato['email']; ?>">
            </label>
            <fieldset>
                <label for="descricao">
                    Descrição (Opicional):
                    <textarea name="descricao" id="descricao" cols="30" rows="10">
                    <?php echo $contato['descricao']; ?>
                    </textarea>
                </label>
                <label for="nascimento">
                    Data de Nascimento:
                    <input type="date" name="nascimento" id="nascimento" value="<?php echo traduz_data_para_exibir($contato['nascimento']);?>">
                </label>
                <label for="favorito">
                    Salvar como favorito?
                    <input type="checkbox" name="favorito" id="favorito" value="1" <?php echo ($contato['favorito'] == 1) ? 'checked': '' ?>>
                </label>
            </fieldset>
            <label>
                <input type="submit" id="salvar" value="<?php echo ($contato['id'] > 0) ? 'atualizar' : 'cadastrar'; ?>">
            </label>

        </fieldset>
    </form>
</body>

</html>