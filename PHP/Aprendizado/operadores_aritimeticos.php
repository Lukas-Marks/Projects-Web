<?php

$soma = 1 + 1;
echo "$soma <hr>";
// + representa soma

$subtracao = 1 - 1;
echo "$subtracao <hr>";
// - representa menos 

$multi = 2 * 2;
echo "$multi <hr>";
// * representa multiplicacao

$divi = 2 / 1;
echo "$divi <hr>";
// a barra / representa divisao
$modu = 2 % 2;
echo "$modu <hr>";
// % representa o resto da divisao

// No php devemos ter cuidado com a ordem de precedencia ex:

$semordem = 2 + 2 / 2;
echo "$semordem <hr>";
// Como nao aplicamos os parenteses ele vai respeirar a ordem de procedencia 

$comordem = (2 + 2) / 2;
echo "$comordem <hr>";
// Aqui foi aplicado os parenteses entao a ordem sera respeitada

/*Mas como passar valores personalizados ?

Podemos passar pela url ex:*/


$n1 = $_GET["a"];
$n2 = $_GET["b"];
/*Essas sao as requisicoes _get entao ele vai pegar o parametro a da url e depois o n2 vai pegar o b*/
$n3 = $n1 + $n2;
echo "<br>";

echo "$n1"."<-A e B->"."$n2";
echo "<br> Soma da $n3 <br>";

//Funcoes php relacionado a operacoes
echo abs(-10); // pega valor absoluto
echo "<br>";
echo pow(2, 2); // criar potenciacao
echo "<br>";
echo sqrt(4); // raiz quadrada
echo "<br>";
echo round(12.5); // valor arredondador
echo "<br>";
echo ceil(2.2); // aredonda pra cima independente do valor
echo "<br>";
echo floor(2.2); // aredonda pra baixo independente do valor
echo "<br>";

echo intval(4.6666); // ele vai pegar a parte inteira

echo "<br>";

echo number_format(5,3); // valor e 5 e tera 3 casas decimais












?>