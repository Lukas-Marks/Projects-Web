<?php 

// O vetor é usado para, fazermos uma sequencia de valores em uma variavel, no php conforme vc aumenta os valores o array aumenta tmb

// 1° forma de fazer isso 
$n[0] = 'Lucas';

// 2° forma com array
$l = array('Marques');
print_r ($n);
echo "<br>";
// Aqui tera um erro dizendo que nao tem nada aqui 

// Caso queira colocar um novo valor pode fazer o seguinte
$n[] = 10;
print_r ($n);
echo "<br>-------------------------------<br>";

//range <- é um vetor tmb
/*Com ele c coloca, o numero inicial, numero final, e de quanto em quanto ele vai chegar nesse resultado*/
$do = range(0,100,10);
print_r($do);

//foreach
// A cada elemento do $do vai para o $valor

/*Com ele podemos dizer oq sera feito a cada valor do $do*/
foreach ($do as $valor) {
	echo "<br>$valor<br>";
}

// Chaves personalizadas
// nao ficamos limitados as keys 0 1 2 3 4, podemos criar a nossa ex:


$new = array(1 => 'Marques',
				 5 => 'Gomes',
				 	6 => 16);

$new[] = 7 ;
$new[] = 8 ;
// Aqui o php por padrao coloca o proximo numero da sequencia se usarmos os numeros, caso use letras o valor sera diferente

// UNSET
unset($new[8]);
// unset meio que destroi nosso elemento, ou seja tira ele do array

print_r($new);

// (=>) simbolo de associação

//KEYS
/*Quando usarmos chaves personalizadas podemos colocar uma variavel no foreach para pega-lás*/

$new2 = array('one' => 'Marques',
				 'two' => 'Gomes',
				 	'three' => 16);

foreach ($new2 as $chave => $valor){
	echo "<br>O nosso campo $chave"." Possui o valor: $valor<br>";
}

































?>