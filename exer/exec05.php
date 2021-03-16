<?php
    echo "Utilizando arrays <br>";
    $aluno = [
        'nome' => 'Felipe',
        'idade' =>  29,
        'rg' => '47.329.339-0',
        'telefone' => '(13)99182-6694'
    ];

    $aluno['nome'] = 'Paulo';
    $aluno['e-mail'] = 'giromba@hotmail.com';

    echo "Nome: ", $aluno['nome'], "<br>";
    echo "Idade: ", $aluno['idade'], "<br>";
    echo "RG : ", $aluno['rg'], "<br>";
    echo "Tel: ", $aluno['telefone'], "<br>";
?>