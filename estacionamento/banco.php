<?php
#criar valores da conexão.
$dbservidor = '127.0.0.1';
$dbusuario = 'sistemaestacionamento';
$dbsenha = 'sistemaestacionamento';
$dbbanco = 'db_estacionamento';

#criar conexão com a base.
$conexao = mysqli_connect($dbservidor,$dbusuario,$dbsenha,$dbbanco);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

#criar fução SQL buscar vagas.
function exibir_vagas($conexao){
    $SQLbuscar = "SELECT * FROM tb_vaga";
    $SQLresultado = mysqli_query($conexao,$SQLbuscar);

    $vagas = [];

    while ($vaga = mysqli_fetch_assoc($SQLresultado)) {
        $vagas[] = $vaga;
    }
    return $vagas;
}

#criar fução SQL registrar vagas.
function registra_vaga($conexao,$vaga){
    $SQLregistra = "INSERT INTO tb_vaga(placa,marca,modelo,hentrada,hsaida)
        VALUES (
            '{$vaga['placa']}',
            '{$vaga['marca']}',
            '{$vaga['modelo']}',
            '{$vaga['entrada']}',
            '{$vaga['saida']}'
        )";

     mysqli_query($conexao,$SQLregistra);
}
?>