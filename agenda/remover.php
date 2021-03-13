<?php
require "banco.php";

remover_contato($conexao,$_GET['id']);
header('Location: agenda.php');
die();
?>