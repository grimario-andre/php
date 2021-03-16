<?php
#inserir a classe produto.
require_once 'class/Produto.Class.php';
# criar um objeto.
$produto1 = new Produto;
$produto2 = new Produto;

#atribuir valores produto1.
$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';
#atribuir valores produto2.
$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - The Eagles Hotel California';
#exibir valores.
?>
<pre>
    <?php 
        var_dump($produto1)."\n";
        print_r($produto1->ImpremeEtiqueta());
    ?>

</pre>

<pre>
    <?php 
        var_dump($produto2)."\n";
        print_r($produto2->ImpremeEtiqueta());
    ?>

</pre>