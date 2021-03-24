<?php
$dbservidor = '127.0.0.1';
$dbusuario = 'root';
$dbsenha = '';
$dbbanco = 'db_tarefa';

$conexao = mysqli_connect($dbservidor, $dbusuario, $dbsenha, $dbbanco);

if (mysqli_connect_errno()) {
    echo "Problemas	para	conectar	no	banco.	Erro:	";
    echo    mysqli_connect_error();
    die();
}

#criando função buscar tarefas.
function buscar_tarefas($conexao)
{
    $SQLbusca = "SELECT * FROM tb_tarefa";
    $SQLresultado = mysqli_query($conexao, $SQLbusca);

    $tarefas = [];

    while ($tarefa = mysqli_fetch_assoc($SQLresultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}

#Gravar tarefas
function gravar_tarefa($conexao, $tarefa)
{
    $SQLgravar = "INSERT INTO tb_tarefa(nome,descricao,prioridade,prazo,concluida)
        VALUES(
                '{$tarefa['nome']}',
                '{$tarefa['descricao']}',
                 {$tarefa['prioridade']},
                 '{$tarefa['prazo']}',
                 {$tarefa['concluida']}
                )";

    mysqli_query($conexao, $SQLgravar);
}

#buscar tarefa
function buscar_tarefa($conexao, $id)
{
    $SQLbusca = "SELECT * FROM tb_tarefa where id = $id";
    $SQLresultado = mysqli_query($conexao, $SQLbusca);
    return mysqli_fetch_assoc($SQLresultado);
}

#editar tarefas
function editar_tarefa($conexao, $tarefa)
{
    $SQLeditar =  "UPDATE tb_tarefa SET 
        nome = '{$tarefa['nome']}',
        descricao = '{$tarefa['descricao']}',
        prioridade = {$tarefa['prioridade']},
        prazo = '{$tarefa['prazo']}',
        concluida = {$tarefa['concluida']}
            WHERE id = {$tarefa['id']}
        ";

    mysqli_query($conexao, $SQLeditar);
}

#remover tarefas
function remover_tarefa($conexao, $id)
{
    $SQLdeletar = "DELETE FROM tb_tarefa WHERE id = {$id}";

    mysqli_query($conexao, $SQLdeletar);
}

#gravar anexo
function gravar_anexo($conexao, $anexo)
{
    $SQLgravar = "INSERT INTO tb_anexo (tarefa_id,tarefa_nm,arquivo) 
        VALUES (
                    {$anexo['tarefa_id']},
                    '{$anexo['tarefa_nm']}',
                    '{$anexo['arquivo']}'
        )";
    mysqli_query($conexao, $SQLgravar);
};

#buscar anexo
function buscar_anexos($conexao, $tarefa_id)
{
    $SQL = "SELECT * FROM tb_anexo 
        WHERE $tarefa_id = {$tarefa_id}";
    $SQLresultado = mysqli_query($conexao, $SQL);

    $anexos = [];

    while ($anexo = mysqli_fetch_assoc($SQLresultado)) {
        $anexos[] = $anexo;
    };

    return $anexos;
};
