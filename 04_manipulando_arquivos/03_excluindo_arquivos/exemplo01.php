<?php 

$file = fopen("teste.txt", "w+"); // Cria o arquivo

fclose($file);

unlink("teste.txt"); // Remove o arquivo

echo "Arquivo removido com sucesso";

?>