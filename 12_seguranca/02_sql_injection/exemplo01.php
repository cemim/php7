<?php 

// Exemplo ataque: Passar na URL id=2 OR 1=1 --
$id = (isset($_GET["id"]))?$_GET["id"]:1;

// Tratamento
if (!is_numeric($id)) {
	exit("Dados inválidos!!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	echo $resultado->deslogin . "<br>";
}

?>