<?php
// Formas de atribuicao
//1º forma a = a + b ou
// 2º forma a = a+=b
// caso a variavel esteja recebendo mais um, posso usar $a++

/*Operadores de atribuicao*/
// adicao : a = a + b ou a+=b
// subtracao: a = a - b ou a-=b
// multiplicacao: a = a * b ou a*=b
// divisao: a = a / b ou a/=b
// modulo: a = a % b ou a%=b
// concatencao: a = a.b ou a.=b

	//EXEPLO porcentagem

/*$preco = $_GET['a'];
$preco -= $preco*10/100;
echo "Com 10% a mais o preco sera de R$". number_format($preco, 2);*/

//Operadores de incremento
// pré-incremento : ++$a ele tira depois de printar a variavel

// pós-inrcremento : $a++
// ele tira primeiro e depois ele mostra se for preciso

// pre decremento : --$a
// pos decremento : $a--

// Exemplo de incremento
/*$atual = $_GET['aa'];
echo "O ano atual e ".$atual;
echo "O anterior e <br>".--$atual;*/

// Comentarios

#inline
/*Multiline
varias linhas
*/

// Variaveis referenciadas

//$a = 10;
//$b = &$a;

// Quando colocamos esse & estamos ligando uma variavel a outra, entao se o valor de uma mudar a outra tmb muda

/* Exemplo de variaveis referenciadas
echo "valor a $a "." Valor $b <br>"; 
$b += 5;
echo "<br>$b";
*/

// Variaveis de variaveis

$idade = 'Lucas';
$$idade = 'Marques';

echo "$idade <br>";
echo "$Lucas";

/*O que aconteceu aqui foi... $idade recebeu o valor Lucas, e o valor Lucas que nao era variavel se tornou uma variavel, e pegou o valor Marques, gracas aos dois $$*/


  ?>