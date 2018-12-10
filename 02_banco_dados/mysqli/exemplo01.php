<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "dbphp7";

$conn = new mysqli($servidor,$usuario,$senha,$banco);

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)"); // ? Representa que são os valores que serão preenchidos pelo usuario

$stmt->bind_param("ss", $login, $pass); // Recebe os valores do insert: Tipo de dados Ex:(s-string, i-int), param1, pram2,

// As variáveis podem ser declaradas depois, pois são executadas no método execute
// Na passagem de parametros as variaveis devem ser passadas por referência
$login = "user2";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "12345";

$stmt->execute();

?>