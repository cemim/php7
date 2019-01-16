<?php 

error_reporting(E_ALL & ~E_NOTICE); // Sobreescreve o arquivo php.ini para exibir as mensagens de erro e não exibir os notice

$nome = $_GET["nome"]; // Daria um Notice porque não existe o parametro GET, caso não existisse a função error_reporting

echo $nome;

?>