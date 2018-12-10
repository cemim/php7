<?php

$tipo_banco = "mysql";
$banco = "dbphp7";
$servidor = "localhost";
$usuario = "root";
$senha = "";

$conn = new PDO("$tipo_banco:dbname=$banco;host=$servidor", $usuario, $senha);

//Statement
$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC); // Semelhante ao fetch array, o PDO::FETCH_ASSOC é uma constante para trazer apenas o associativo 

print_r($results);

echo "<br/><br/>";

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ": </strong>" . $value . "<br/>";
	}
	echo "==============================<br/>";
}

?>