<?php 

// strtolower (string to lower = letras para minusculas)
// Com ela todas as letras ficaram minusculas

/*$nome = "Lucas Marques";
strtolower($nome);
echo "$nome";*/

//strtoupper
// vai ficar tudo em maiuscula

/*$nome = "Lucas Marques";
echo strtoupper($nome);*/

//ucfirst (upercase first maiuscula primeira)
// primeira letra maiuscula do primeiro texto, se tiver outras nao vai interferir

/*$nome = "LUcas marques";
echo ucfirst(strtolower($nome));*/

//ucwords
// A cada palavra a primeira letra sera maiuscula

/*$nome = "Lucas Marques";
echo ucwords($nome);*/

//strrev
/*Seu texto ao contrario*/

/*$nome = "Lucas Marques";
echo strrev($nome);*/

//strpos
//Mostra a posição da qual aparece nesse caso a string | medido por caracter | lembre do case sensitive

/*$nome = "Lucas Marques PHP";
echo strpos($nome, "PHP");
*/

//stripos (ignor)
// Aqui o case sensitive é ignorado, eMostra a posição da qual aparece nesse caso a string aparece
/*$nome = "Lucas Marques PHP";
echo strpos($nome, "PHP");

 
//substr_count($nome, "PHP")
//Quantas vezes a string php apareceu na frase

/* nesse caso 1vez
$nome = "Lucas Marques PHP";
echo strpos($nome, "PHP");
*/

//substr

// Com essa funcao podemos dizer a um texto, de onde pegar(caractere) e printar ate qual caractere()
// ou podemos dizer substr($nome,10) assim ele vai pegar do 10 caractere e vai completar
// é possivel trabalhar com numeros negativos
/*$nome = "Lucas Marques PHP";
echo substr($nome, 0,10);



*/

//str_pad

// Usado para complementarm, nesse caso com espaços a direita, caso nao passe dos  caracteres desejados desejado de 
/* $nome = "Lucas Marques";
echo str_pad($nome, 30, "@",STR_PAD_RIGHT)."f";*/

// temos a variavel, quantos caracteres deve ter, o caracter para completar os campos vazios, complemetar a direita,centro e left


//str_repeat
// ela nos permite dizer quantas vezes queremos repetir a string

 $nome = "Lucas Marques<br>";
 echo str_repeat($nome, 5);

 echo str_repeat("--", 20);


//str_replace
// Podemos trocar palavras quando aparecerem no texto
  echo str_ireplace("Hello", "Ola", "Hello World");
 // Use i no replace e ele vai ignorar os case sensitive
// nesse caso sempre que aprarecer hello, sera substituido pot ola



















?>