<?php
require "banco.php";
$duplicar = busca_contato($conexao,$_GET['id']);
gravar_contato($conexao,$duplicar);
header("Location: agenda.php");
die();
?>