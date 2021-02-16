<?php 
    /* Para iniciar um novo array, é possível utilizar a sintaxe 'array()' ou a nova sintaxe dos colchetes, que é mais simples e elegante. Veja o exemplo a seguir das duas formas de se iniciar um array vazio. */

    //Ex:
    $dias = array();
    $meses = [];

    /* o resultado será o mesmo para ambas as variáveis, mas atualmente o padrão de projetos para PHP é a utilização da forma dos colchetes. Por issi é a forma que usada neste livro.
    Algo bem intessante dos arrays é podemos iniciar um array com valores. Com isso, não é necessário ter umm linha de código para declarar o array e mais linhas para adicionar valores: */

    //Ex:
    $semana = array('seg','ter','qua','qui','sex');
    $ano = ['jan','fev','mar','mai'];

    /* Ambos casos, estamos criando apenas valores que o array contém, e o PHP se encarregará de criar  'chaves/índices' para acessar cada valor, essas chaves serã numeradas. */

    //Ex:
    $ano = ['jan','fev','mar','mai']; // 'jan'/[0]; 'fev'/[1]; 'mar'/[2]
    echo $ano[1]; //todo array no php começa com índice 0.

    /* Após criar um array, você também pode inserir valores nele. Existem duas formas de se fazer isso: uma usando a função 'Array_push()' e outra usando a sintaxe dos colchetes '[]'. */

    //Ex:
    $_dias = [];
    $_meses = [];

    $_dias[] = 'seg';
    $_dias[] = 'ter';

    array_push($_meses,'jan','fev');
    array_push($_meses,'mnar');

    /* O resultado nos dois casos será um array com  dois valores string. Essas formas de inserir dados em um array são bastantes similares, com a diferença que o array_push() 'vai consumir mais recurso da máquina'.
    Agora vamos ao mais interessante, as diferenças. Veja o exemplo: */

    $_pessoa = [];
    $_aluno = [];

    $_pessoa['nome'] = 'Linus';
    $_pessoa['sistema'] = 'Linux';
    $_pessoa['linguagem'] = 'C';

    array_push($_aluno,'Maria','João','Paulo');

    echo $_pessoa['nome'];
    echo $_pessoa['sistema'];
    echo $_aluno[0];
    echo $_aluno[2];

    /* Perceba que, 'ao utilizar a forma dos colchetes, é possível nomear as chaves dos valores'. Dessa forma, podemos ter não apenas chaves numéricas, mas também strings. Assim fica bem mais simples de montar variáveis contendo diversas informações, como nesse caso, um array com os dados de um pessoa. 
    Já o array_push() 'nos permite adicionar diversos itens de uma vez só'. Porém não é possível nomear as chaves, elas são enumeradas automanticamente pelo php.
    Ainda existe outra forma de criar arrays já atribuindo cahves e valores, veja o exemplo. */

    $pessoa2 = [
        'nome' => 'Linus',
        'sistema' => 'Linux',
        'linguagem'=> 'C'
    ];

    echo $pessoa2['nome'];
    echo $pessoa2['linguagem'];

    /* Neste caso, criamos o array $pessoa2 já com os índices nomeados (nome,sistema,linguagem) e seus valores. Após sua criação, ainda é possível modificar os valores dos índices existentes, ou mesmo crias mais índices: */

    //Ex:
    $pessoa2['nome'] = 'Linux';
    $pessoa2['idade'] = 29;

    echo $pessoa2['nome'];
    echo $pessoa2['idade'];

    /*legal né, tenha em mente que arrays são realmente muito úteis no mundo PHP. Tente se acostumasr com as fiferentes formas de manipulá-los, pois você pode trabalhar em projetos usando tanto uma forma quanto a outra. */
    
?>