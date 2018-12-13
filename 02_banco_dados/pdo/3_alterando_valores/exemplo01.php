<?php

$tipo_banco = "sqlsrv";
$banco = "dbphp7";
$servidor = "localhost";
$usuario = "sa";
$senha = "F1l1pe.C";

$conn = new PDO("$tipo_banco:Database=$banco;server=$servidor\SQLEXPRESS;ConnectionPooling=0", $usuario, $senha);

//Statement
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID"); //ID único dos parametros

$login = "Jose";
$password = "teste";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado com sucesso";

?>