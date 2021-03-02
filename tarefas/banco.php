<?php
$dbservidor = '127.0.0.1';
$dbusuario = 'sistematarefa';
$dbsenha = 'sistema';
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
    $SQLgravar = "INSERT INTO tb_tarefa(nome,descricao,prioridade,prazo)
        VALUES(
                '{$tarefa['nome']}',
                '{$tarefa['descricao']}',
                 {$tarefa['prioridade']},
                 '{$tarefa['prazo']}'
                )";

    mysqli_query($conexao, $SQLgravar);
}
