<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "dbphp7";

$conn = new mysqli($servidor,$usuario,$senha,$banco);

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
}

$dados = array();

$result = $conn->query("SELECT * FROM tb_usuarios");

while($row = $result->fetch_assoc()){

	array_push($dados, $row);
	 //print_r($row);
	 //echo "<br />";
}

echo json_encode($dados);

?>