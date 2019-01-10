<?php 

date_default_timezone_set('America/Sao_Paulo');

$images = scandir("images"); // Retorna um array

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array('.','..' ))) {
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename); // Retorna um array com as informações do arquivo
		$info["size"] = filesize($filename); // Adiciona o tamanho do arquivo nas informações
		$info["modifies"] = date("d/m/Y H:i:s", filemtime($filename)); // Adiciona data de modificação
		$info["url"] = "http://127.0.0.1/projetos/php7/04_manipulando_arquivos/01_manipulando_diretorios/" . str_replace("\\","/",$filename);

		array_push($data, $info);		
	}
}

echo  json_encode($data);

?>