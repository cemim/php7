<?php 

$name = "images";

if (!is_dir($name)) {
	mkdir($name);
	echo "Diretório $name criado com sucesso";
} else{
	echo "Já existe o diretório: $name";
}

// rmdir($name) Remove o diretório

?>