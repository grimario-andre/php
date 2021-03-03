<?php
$dbservidor = '127.0.0.1';
$dbusuario = 'root';
$dbsenha = '';
$dbbanco = 'db_contato';

$conexao = mysqli_connect($dbservidor, $dbusuario, $dbsenha, $dbbanco);

if (mysqli_connect_errno()) {
    echo "Problemas para concectar ao banco. ERROR: ";
    echo mysqli_connect_error();
}

#criar função buscar tarefas.
function buscar_tarefas($conexao)
{
    $SQLbusca = "SELECT * FROM tb_contato";
    $SQLresultado = mysqli_query($conexao, $SQLbusca);

    $contatos = [];

    while ($contato = mysqli_fetch_assoc($SQLresultado)) {
        $contatos[] = $contato;
    }

    return $contatos;
}

#criar função gravar contatos.
function gravar_contato($conexao,$agenda)
{
    $SQLgravar = "INSERT INTO tb_contato(nome,telefone,descricao,nascimento,favorito)
    VALUES ( 
               '{$agenda['nome']}',
               '{$agenda['telefone']}',
               '{$agenda['descricao']}',
               '{$agenda['nascimento']}',
               '{$agenda['favorito']}'
            )";
            
    mysqli_query($conexao,$SQLgravar);   
}
