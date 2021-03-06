<?php 

namespace Hcode;

use Rain\Tpl;

class Mailer
{
	const USERNAME = "cursophphcode34@gmail.com";
	const PASSWORD = "cursophphcode071089";
	const NAME_FROM = "Hcode Store";

	private $mail;
	
	function __construct($toAddress, $toName, $subject, $tplName, $data = array())
	{

		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"] . "/views/email/", // Caminho template
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"] . "/views-cache/",
			"debug"         => false // set to false to improve the speed
		);

		Tpl::configure( $config );

		$tpl = new Tpl;

		foreach ($data as $key => $value) {
			$tpl->assign($key, $value);
		}

		$html = $tpl->draw($tplName,true);

		//Create a new PHPMailer instance
		$this->mail = new \PHPMailer();
		//Tell PHPMailer to use SMTP
		$this->mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$this->mail->SMTPDebug = 0;
		//Set the hostname of the mail server
		$this->mail->Host = 'smtp.gmail.com';
		// use
		// $this->mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$this->mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$this->mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$this->mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$this->mail->Username = Mailer::USERNAME;
		//Password to use for SMTP authentication
		$this->mail->Password = Mailer::PASSWORD;
		//Set who the message is to be sent from
		$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);
		//Set an alternative reply-to address
		//$this->mail->addReplyTo('replyto@example.com', 'First Last'); // Quem recebera a resposta
		//Set who the message is to be sent to
		$this->mail->addAddress($toAddress, $toName);
		//Set the subject line
		$this->mail->Subject = utf8_decode($subject);
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$this->mail->msgHTML(utf8_decode($html));
		//Replace the plain text body with one created manually
		$this->mail->AltBody = 'Seu serviço de E-mail não suporta mensagens HTML';		
	}

	public function send()
	{

		return $this->mail->send();
	}
}

?>