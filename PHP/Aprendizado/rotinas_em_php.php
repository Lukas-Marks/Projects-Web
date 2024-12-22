<?php 

// As functions sao tipos nossas rotinas
/*function soma($num1,$num2){

$s = $num1 + $num2;
echo "$s";

}
soma(12,12)
*/


/* return
function soma($num1,$num2){

$s = $num1 + $num2;
return $s;
// o return ele vai retornar (nesse caso a soma) o valor do resultado pedido, quando chamamos o return devemos colocar em uma variavel , caso queiramos printar o resultado, sempre q o return for usado o codigo vai parar ou seja o restante dele nao sera executado, ele so consegue pegar um valor


}*/

/*
$res = soma(10,10);
echo "$res";*/


function seq() {
// Mesmo se nao passarmos nenhum argumento podemos fazer o seguinte

	$nu = func_get_args(); 
	
	//ela pega todos os argumentos e coloca em um vetor, nesse caso ele se chama $nu
	$total = func_num_args();
	//Ele vai retornar o numero de variaveis passados
	$s = 0; 

	for($i=0;$i < $total;$i++){
		$s = $s + $nu[$i];   
	}

	return $s;
}

$res = seq(1,2,3,4,5);
echo "$res";

?>