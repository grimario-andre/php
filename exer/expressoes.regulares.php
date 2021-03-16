<php 
/* 
Expressões regulares nos permitem pesquisar textos dentro de outros textos, e verificar se determinados textos seguem um padrão predefinido. Usando expressões regulares, podemos fazer coisas como a validaçõa do formato que queremos para a noisa data do prazo de uma forma muito mais simples do que a forma manual, que vimos anteriormente.

usar expressões regulares para validar o formato da nossa data é algo mais ou menos assim: verifique se o texto começa com um ou dois dígitos, seguido de uma barra, seguido por mais um ou dois dígitos, seguido por mais uma barra em, por último, uma sequência de quatro dígitos.

[0-9]
Isso	 significa	 qualquer	 número	 de	 0	 até	 9,	 ou	 seja,	 todos	 os
dígitos	 do	 sistema	 decimal.	 Então,	 para	 validar	 dois	 números
seguidos,	poderíamos	usar	um	padrão	como	o	seguinte:

[0-9][0-9]
Basta	repetir	o	padrão,	assim	 teríamos	uma	validação	para	dois
números	 seguidos.	 Mas	 imagine	 que	 precisássemos	 validar	 10
números	seguidos,	escrever	o	padrão	10	vezes	não	é	prático	e,	com
certeza,	 dificultaria	 muito	 o	 entendimento	 do	 código.	 Por	 isso,
existem	 também	quantificadores	para	as	expressões	regulares.	Veja
o	exemplo:

[0-9]{10}
Isso	quer	dizer	10	vezes	um	dígito.	Mas,	além	de	poder	colocar
uma	 quantidade	 fixa	 de	 repetições	 do	 padrão,	 podemos	 colocar
intervalos:
				[0-9]{3,5}
Isso	 significa	 um	 padrão	 de	 três	 a	 cinco	 dígitos.	 Com	 isso,
podemos	voltar	ao	padrão	para	validar	o	prazo	das	atividades,	que
ficaria	assim:

[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}
*/
?>