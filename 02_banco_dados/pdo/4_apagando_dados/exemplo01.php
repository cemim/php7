<?php

$tipo_banco = "sqlsrv";
$banco = "dbphp7";
$servidor = "localhost";
$usuario = "sa";
$senha = "F1l1pe.C";

$conn = new PDO("$tipo_banco:Database=$banco;server=$servidor\SQLEXPRESS;ConnectionPooling=0", $usuario, $senha);

//Statement
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); //ID único dos parametros

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Apagado com sucesso";

?>