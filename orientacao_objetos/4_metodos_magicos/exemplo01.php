<?php

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($logradouro, $numero, $cidade){
		$this->setLogradouro($logradouro);
		$this->setNumero($numero);
		$this->setCidade($cidade);
	}

	public function __destruct(){
		var_dump("DESTRUIR");
	}

	public function __toString(){
		return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
	}

	public function getLogradouro(){
		return $this->logradouro;
	}

	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}		
}

$meuEndereco = new Endereco("Correa de Melo", "123", "Porto Alegre");

var_dump($meuEndereco); // Exibe variáveis que foram inseridas pelo método construct

echo "<br /> <br />";

echo $meuEndereco; // Chama toString

echo "<br /> <br />";

unset($meuEndereco); // Chama o método destruct
?>