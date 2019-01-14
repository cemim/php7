<?php 

$filename = "usuarios.csv";


if(file_exists($filename)){
	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file)); // Pega a primeira linha com o cabeçalho e transforma em array

	$data = array(); // array que armazena as linhas do arquivo

	while ($row = fgets($file)) {
		
		$rowData = explode(",", $row);

		for($i = 0; $i < count($headers); $i++){ 

			$linha[$headers[$i]] = $rowData[$i]; // Insere os dados em um array associativo

		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);
}

?>