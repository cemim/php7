<?php
	
spl_autoload_register(function($nomeClasse){

	$dirClass = "class"; // Nome do diretorio de classes
	// Para Linux
	//$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php"; // Caminho para as classes

	if (file_exists($filename) == true) {
		require_once($filename);
	}	
});

?>