<?php 
//maior >

//menor <

// maior ou igual >=

// mennor ou igual <=

// <> diferente !=

// Igual == ou identico ===

// Operador unario
// Usado para fazer uma operacao relacional rapida

/* exemplo unario 1
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$resu = $_GET['res'];

$r = ($resu == 's')?$num1+$num2:$num1*$num2';*/
// O operador unario é bem parecido com o if r vai receber $resu  se for s entao tal coisa se nao :tal coisa

// Muito usado para testar valores 
// echo "$r";

/* Exemplo de aluno aprovado/reprovado sem operador logico

echo "<hr>";

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$m = ($n1 + $n2) / 2; 

echo ($m < 7)?"Nao passou":"vc passou";;*/

// Operadores logicos

// and ou && uma coisa e outra

// OU ou || uma coisa ou outra, ou as duas ok

// xor é tipo o ou mas nao pode ter duas concordancias

// not verdadeiro = falso e falso = verdadeiro

// Usando operadores relacionais


/* Operadores logicos

$a and $b	E	Verdadeiro (TRUE) se tanto $a quanto $b são verdadeiros.
$a or $b	OU	Verdadeiro se $a ou $b são verdadeiros.
$a xor $b	XOR	Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
! $a	NÃO	Verdadeiro se $a não é verdadeiro.
$a && $b	E	Verdadeiro se tanto $a quanto $b são verdadeiros.
$a || $b	OU	Verdadeiro se $a ou $b são verdadeiros.*/
echo "<hr>";

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];


echo ($n1 > 5 || $n2 > 5)?"OK tirou pelo menos 5 nas duas provas":"Tirou menos de 5 em uma ou nas duas provas  ";
















?>