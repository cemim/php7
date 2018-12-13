<?php

$tipo_banco = "sqlsrv";
$banco = "dbphp7";
$servidor = "localhost";
$usuario = "sa";
$senha = "F1l1pe.C";

$conn = new PDO("$tipo_banco:Database=$banco;server=$servidor\SQLEXPRESS;ConnectionPooling=0", $usuario, $senha);

//Statement
$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC); // Semelhante ao fetch array, o PDO::FETCH_ASSOC é uma constante para trazer apenas o associativo 

print_r($results);

echo "<br/><br/>";

echo "<br/>Conectado com SQL SERVER <br/><br/>";

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ": </strong>" . $value . "<br/>";
	}
	echo "==============================<br/>";
}

?>