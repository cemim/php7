<form action="cadastrar.php" method="post">

    <div id="html_element"></div>

	<input type="email" name="inputEmail">
	<button type="submit">Enviar</button>
</form>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
	async defer>
</script>
<script type="text/javascript">
	//Apenas o localhost esta autorizado a usar a API então o 127.0.0.1 não funciona
	var onloadCallback = function() {
		grecaptcha.render('html_element', {
			'sitekey' : '6LdzLpQUAAAAAHmHcOItEQJiBn2nTIl8lVaAzmRD'
		});
	};
</script>
