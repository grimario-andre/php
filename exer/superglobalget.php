<?php
 /* Em php existem algumas variáveis chamadas de 'superglobais', isso significa que estas variáveis existem em todos os 'escopos' de seus programas PHP. Ou seja, você pode acessa-las dentro de funções, dentro de laços/loopings , classes etc.

Vamos conhecer a superglobal $_GET */

    $superblobal = [];

    $superblobal = $_GET;

    echo 'Super global $_GET', $superblobal;
?>
