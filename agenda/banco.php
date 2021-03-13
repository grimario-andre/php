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

#buscar contato
function busca_contato($conexao,$id){
    $SQLbusca = "SELECT * FROM tb_contato WHERE id = $id";
    $SQLresultado = mysqli_query($conexao,$SQLbusca);
    return mysqli_fetch_assoc($SQLresultado);
}

#criar função para editar contato
function editar_contato($conexao,$contato){
    $SQLedita = "UPDATE tb_contato SET
        nome = '{$contato['nome']}',
        telefone = '{$contato['telefone']}',
        descricao = '{$contato['descricao']}',
        nascimento = '{$contato['nascimento']}',
        favorito = {$contato['favorito']}
            WHERE id =  '{$contato['id']}'
    ";

    mysqli_query($conexao,$SQLedita);
}

#remover contato
function remover_contato($conexao,$id){
    $SQLremover = "DELETE FROM tb_contato WHERE id = $id";

    mysqli_query($conexao,$SQLremover);
}