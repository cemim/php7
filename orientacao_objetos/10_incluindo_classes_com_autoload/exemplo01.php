<?php

/*
	A função autoload procura os arquivos
	com os nomes das classes
*/
function __autoload($nomeClasse){
	var_dump($nomeClasse);
	echo "<br/>";
	require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(80);
?>