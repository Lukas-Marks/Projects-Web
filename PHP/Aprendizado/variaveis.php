<?php 

// Tipos de variaveis

$interger = 10;
// Armazena numeros inteiros


$real = 1.2;
// variavel real

$bolean = true;
// verdadero 1 ou falso 0/vazio

$string = 'String';
// Tipo string

/* No php ele por si só diz o tipo da variavel mas podemos forcar esse resultado*/

$fstring = (int) '100lu';
// Como essa variavel nao é string ela vai zerar a variavel, mas caso eu coloque o  numero na antes das letras ele vai reconhecer

echo "$fstring"." <- Esse e o valor";
//Use ponto para concatenar valores
 ?>