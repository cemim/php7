<?php 

$email = $_POST["inputEmail"];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	'secret' => '6LdzLpQUAAAAAJIygH23CVPcFhqDV-jGZ9CCiH16', 
	'response' => $_POST['g-recaptcha-response'],
	'remoteip' => $_SERVER['REMOTE_ADDR']
)));// Informações da API do Google
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Aguarda um retorno um retorno

$recaptcha = json_decode(curl_exec($ch),true);

curl_close($ch);

if ($recaptcha["success"] === true)
{
	echo "OK: " . $_POST['inputEmail'];
}
else
{
	header("Location: exemplo01.php");
}


?>