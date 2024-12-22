<?php  

/* exemplo 1
O get pega o name do formulario
$valor = $_GET["v"];

$rq = sqrt($valor);

echo number_format($rq, 3); 



<a href="integracao_php_e_html.php"> Volte Aqui</a>*/


/*      	Exemplo 2
$nome = isset($_GET["nome"])?$_GET["nome"]:"[Nao informado]";

$data = isset($_GET["data"])?$_GET["data"]:"[Nao informado]";

$nasc = isset($_GET["nasc"])?$_GET["nasc"]:"[nao informado]"; 

$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[nao informado]";


$nasc = date("Y") - $nasc;


echo "Seu nome é $nome";
echo "<br>";
echo "Sua data de nascimento é $data";
echo "<br>";
echo "Sua idade é $nasc anos";
echo "<br>";
echo "Seu sexo é $sexo";
*/

/*			Exemplo Usando	php no css*/
$tex = isset($_GET["tex"])?$_GET["tex"]:"[Nao informado]";

$tamanho = isset($_GET["tam"])?$_GET["tam"]:"[Nao informado]";

$cor = isset($_GET["cor"])?$_GET["cor"]:"[Nao informado]";

echo "<h1 style=font-size:$tamanho;color:$cor;>$tex</h1>";

?>