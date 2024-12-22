<?php 
// as matrizes no php seria uma array dentro de outro

/*$n = array( array('Lucas', 'leandro'),array('16','15'),array('no','no'));
print_r($n);

foreach ($n as $key => $value) {
	echo "$key"."$value<br>";
	// O foreach nao funciona com multiarrays
}*/

$nums = array ('one','two','three',2);

$nums[] = 'four';
/*Adicionarmos um novo valor ao array */

//var_dump
/*Ele é um pouco mais complexo*/
var_dump($nums);

//count
///Quantos elementos tem no vetor*/

/*echo "elementos";
echo count($nums);
*/


//array_push
//Adiciona um elemento ao final do array| variavel, e o novo valor

/*array_push($nums, '6');*/


//array_pop($var)
//Com ele podemos tirar o ultimo valor

/*array_pop($var);*/

//array_unshift($n,7);
/*Coloca o valor no inicio dos elementos*/

// array_shift($nums);
/*Eliminar o elemento colocado no inicio*/

//sort($n)
/*Ele vai ordenar em ordem alfabetica ou numerica*/

/*rsort*/
/*Vai ordenar ao contrario*/

/*asort*/
/*Ele vai conservar a sua key quando ocorrer a mudança do menor ao maior*/

//arsort
/*Vai fazer na ordem reversa mas vai conservar o numero da key*/


//ksort
/*Colocar as keys em ordem sem mexer nos valores*/

//krsort
/*Vai colocar as keys em ordem inversa*/


?>