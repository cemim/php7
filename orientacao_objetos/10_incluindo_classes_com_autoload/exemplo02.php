<?php
// É recomendado fazer o autoload com o SPL
function incluirClasses($nomeClasse){
	if (file_exists($nomeClasse . ".php") == true) {
		var_dump($nomeClasse);
		echo "<br/>";
		require_once($nomeClasse . ".php");
	}	
}

// Primeira forma de fazer usando para invocar a classe DelRey
spl_autoload_register("incluirClasses");

// Segunda forma de fazer usando para as classes abstratas
spl_autoload_register(function($nomeClasse){
	if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") == true) {
		require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}	
});

$carro = new DelRey();
$carro->acelerar(80);
?>