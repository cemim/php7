<?php

$tipo_banco = "mysql";
$banco = "dbphp7";
$servidor = "localhost";
$usuario = "root";
$senha = "";

$conn = new PDO("$tipo_banco:dbname=$banco;host=$servidor", $usuario, $senha);

$conn->beginTransaction();
//Statement
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); //ID único dos parametros

$id = 1;

$stmt->execute(array($id));

//$conn->rollBack(); // Para cancelar o delete
$conn->commit(); // Para confirmar a exclusão
echo "Apagado com sucesso";

?>