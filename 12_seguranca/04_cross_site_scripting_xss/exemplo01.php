<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 
/**
	Evitar que o usuário envie tags HTML ou scripts maliciosos
	Ex: Escrever no campo input: <script>alert("oi")</script>
*/
if (isset($_POST['busca'])) {
	//echo strip_tags($_POST['busca']); // Remove as tags e permite um parametro adicional para permitir determinadas tags
	echo htmlentities($_POST['busca']); // Escreve as tags na tela
}

?>