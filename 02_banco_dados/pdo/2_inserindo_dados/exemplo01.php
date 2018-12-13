<?php

$tipo_banco = "sqlsrv";
$banco = "dbphp7";
$servidor = "localhost";
$usuario = "sa";
$senha = "F1l1pe.C";

$conn = new PDO("$tipo_banco:Database=$banco;server=$servidor\SQLEXPRESS;ConnectionPooling=0", $usuario, $senha);

//Statement
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)"); //ID único dos parametros

$login = "Jose";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso";

?>