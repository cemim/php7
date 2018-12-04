<?php
class Pessoa{
	
	public $nome; //Atributo
	
	public function falar(){
		return "O meu nome é " . $this->nome;
	}
}

$filipe = new Pessoa();

$filipe->nome = "Filipe";
echo $filipe->falar();

?>