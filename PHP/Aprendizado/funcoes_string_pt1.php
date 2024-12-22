<?php 

// PRINTF()
/* Permite exibir uma string com itens formatados.*/

/*$l = "leite";
$pr = 5.00;
$pp = 3.00;
printf("O %s Custou RS: %.2f e %.2f", $l, $pr, $pp);*/
// com esse comando vc nao precisa usar o number_format, para usar o printf vc deve passar aonde vai ficar a string(%s) e o numero(%.2f) e no fim coloca , e as variaveis que serao executadas por ordem de settagem
// %d = valor decimal, %u valor decimal sem sinal, %valor real, %s string, isso sao so alguns de varios


//PRINT_R()
/*- Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada */

/*$x[0] = 4;
$x[1] = 8;
$x[2] = 12;

print_r($x);*/

//pode usar var_dump , ou var_export
// Aqui conseguimos ver os valores das nossas arrays

// WORDWRAP

/*Cria quebras de linha ou divisões em uma string em um tamanho especificado.*/

$text = "Lucas Marques";
$trans = wordwrap($text, 4, "<br>\n", false);// dessa forma podemos fazer tudo visualmente:
// O br serve para quebrar linha e o \n serve para quebrar linha tanto no documento quanto no texto, false = nao quebra as palavras q nesse caso tem mais de 4 caracter


/*echo($trans);*/

/*Entao quebra linhas nao visualmente mas no codigo html em si, nesse caso a cada 5 letras quebra*/


//strlen 

//tamanho em caracteres que o texto possui

/*$tamanho = strlen($text);
echo "$tamanho";*/


//trim
/*- Caso coloquemos espaços no inicio e no fim o trim ira tirar esses espaços*/

/*$nome = "   Lucas lu   ";
$tam = trim($nome);
echo(strlen($tam));*/

// Entao aqui com o trim retiramos os espacos do inicio e do fim

//ltrim
/*- nao Conta os espacos do inicio*/


//rtrim
/*- elimina os espacos do final*/



// str_word_count 
/*- faz a contagem de palavras
*/ 

$nome = "Luca Marques";
str_word_count($nome, 0);
// 0 Vai contar as palavras
// 1 transforma cada palavra em um array
// 2 é igual ao 1 mas a diferença é que ele vai indicar atravez do numero do array onde a palavra começa


// Explode
/*- o explode nos permite criar uma array */

/*$nome = "Lucas Marques"; 
$vetor = explode(" ",$nome);*/

// Toda vez que houver um "space" ele vai explodir 
/*print_r($vetor);*/


// implode

/*$nome = "Lucas Marques"; 
$vetor = explode(" ",$nome);
print_r($vetor);
echo "<br>";

$revetor = implode(" ", $vetor);
print_r($revetor);*/

/*O implode ou join vai fazer o inverso do explode ou seja a array vai virar texto delimitada por "space" */


//str_split

/*$nome = "Lucas Marques"; 
$vetor = str_split($nome);
print_r($vetor);*/
/*Cada letra ira se tornar um array*/


// chr
/*Cada letra possui um codigo e com esse chr podemos pegar a letra baseada no codigo*/

/*$letra = chr(35);
echo "$letra";*/

//ord
/*Faz o contrario o chr*/

$letra = ord("A");
// Aqui vemos o codigo que corresponde a letra passada
echo "$letra";













?>