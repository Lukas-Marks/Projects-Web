
<?php

/* Isso sao as passagens por referencia

function teste(&$x){
 $x += 2;
 echo "valor de x é $x <br>";
}

$a = 5;

teste($a);
echo "Valor de a ficou ".$a;*/



/*Rotinas externas*/

function ola() {
	echo "Hello World!";
}


// Include

/*Include nos permite pegar algo de outro lugar para usarmos na nossa pagina sem replicar o codigo*/

// Include_once
/*Se ja foi carregado o script/pagina entao nao carregue denovo, caso nao tenha carregado carregue pela primeira vez*/


// Require

/*Ele faz o mesmo que o include mas se o lugar do arquivo nao estiver disponivel ele para de funcionar, diferente do include que ignora*/

// Include_once

/*Se ja foi carregado o script/pagina entao nao carregue denovo, caso nao tenha carregado carregue pela primeira vez*/




?>