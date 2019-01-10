<?php 
	
$file = fopen("log.txt", "a+"); // Cria o arquivo se nao existir e move o cursor para o fim do arquivo

fwrite($file, "\nteste");

fclose($file);

echo "Arquivo criado com sucesso";

?>