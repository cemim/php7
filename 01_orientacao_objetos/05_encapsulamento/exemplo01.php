<?php
	
	class Pessoa {

		public $nome = "Rasmus Lerdof";
		protected $idade = 48;
		private $senha = "123456";

		public function verDados(){
			echo "<br/>Dados do Método " . get_class($this) . ": <br/>";
			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

	// Vai herdar todos os atributos e métodos da classe Pessoa, menos o que for private
	class Programador extends Pessoa{
		public function verDados(){
			$this->idade = 18;

			echo "<br/>Dados do Método ". get_class($this) . ": <br/>";
			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";			
		}
	}

	$objeto = new Pessoa();

	echo $objeto->nome . "<br><br>";

	// Vai dar erro porque o método protegido só pode ser acessar pelo métodos da classe ou quem herda da classe
	//echo $objeto->idade . "<br>"; 

	/* 
		Vai dar erro porque um método privado só pode ser acessado pela própria classe, 
		diferente do protected nem mesmo as classes que herdam podem usar
	*/
	//echo $objeto->senha . "<br>"; 

	
	// Como o método é público exibe os Dados
	$objeto->verDados();

	// Como programador estende	pessoa ele herda  os atributos
	// Mas sobrepoe os métodos com o mesmo nome
	$objeto2 = new Programador();
	$objeto2->verDados();

?>