<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Tarefas</title>
</head>

<body>
    <!-- div container -->
    <div class="container-fluid" style="background-color: white; margin: 20px; padding: 10px; border-radius: 10px; width:auto;">
        <form method="$_POST" class="container-fluid" style="background-color: white; margin: 20px; padding: 10px; border-radius: 10px; width:auto;">
            <!-- id tarefa -->
            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
            <!-- nome tarefa -->
            <div class="form-group row, container-fluid">
                <legend>Nova tarefa</legend>
                <label for="nome" class="col-6 col-form-label">
                    Tarefa:
                    <?php
                    if ($tem_erros and array_key_exists('nome', $erros_validacao)) : ?>
                        <span class="erro">
                            <?php echo ($erros_validacao['nome']); ?>
                        </span>
                    <?php endif; ?>
                </label>
                <div class="col-6">
                    <input id="nome" name="nome" placeholder="Insira o nome da tarefa" type="text" class="form-control" value="<?php echo $tarefa['nome']; ?>">
                </div>
            </div>
            <!-- descrição tarefa -->
            <div class="form-group row, container-fluid" >
                <label for="descricao" class="col-6 col-form-label">Descrição</label>
                <div class="col-6">
                    <textarea id="descricao" name="descricao" cols="40" rows="10" class="form-control">
                <?php echo $tarefa['descricao']; ?>
                </textarea>
                </div>
            </div>
            <!-- prazo tarefa -->
            <div class="col-6">
            <label for="prazo" class="col-6 col-form-label">
                    Prazo (Opcional):
                <?php
                if ($tem_erros and array_key_exists('prazo', $erros_validacao)) : ?>
                    <span class="erro">
                        <?php echo $erros_validacao['prazo']; ?>
                    </span>
                <?php endif; ?>
            </label>
                <input id=prazo name=prazo type="date" class="form-control" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
            </div>
            <!-- Prioridade tarefa -->
            <div class="form-group row, container-fluid">
                <label class="col-6">Prioridade</label>
                <div class="col-6">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="prioridade" id="prioridade_0" type="radio" class="custom-control-input" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'Checked' : ''; ?> required="required">
                        <label for="prioridade_0" class="custom-control-label">Baixa</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="prioridade" id="prioridade_1" type="radio" class="custom-control-input" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'Checked' : ''; ?> required="required">
                        <label for="prioridade_1" class="custom-control-label">Média</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="prioridade" id="prioridade_2" type="radio" class="custom-control-input" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'Checked' : ''; ?> required="required">
                        <label for="prioridade_2" class="custom-control-label">Alta</label>
                    </div>
                </div>
            </div>
            <!-- concluida -->
            <div class="form-group row">
                <label class="col-6">Concluída :</label>
                <div class="col-6">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="concluida" id="concluida_0" type="checkbox" class="custom-control-input" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'Checked' : ''; ?> required="required">
                        <label for="concluida_0" class="custom-control-label"></label>
                    </div>
                </div>
            </div>
            <!-- botao cadastrar -->
            <div class="form-group row">
                <div class="offset-6 col-6">
                    <button name="submit" type="submit" class="btn btn-primary" value="<?php echo ($tarefa['id'] > 0) ? 'atualizar' : 'cadastrar'; ?>">
                        Cadastrar
                    </button>
                    <!-- botao cancelar -->
                    <button name="submit" type="submit" class="btn btn-primary">
                        Cancelar
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>