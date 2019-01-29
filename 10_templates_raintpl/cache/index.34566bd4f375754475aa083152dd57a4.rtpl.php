<?php if(!class_exists('Rain\Tpl')){exit;}?><html>
	<body>
		<h1>hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>!</h1>
		<p>Teste de template!</p>
		<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	</body>	
</html>