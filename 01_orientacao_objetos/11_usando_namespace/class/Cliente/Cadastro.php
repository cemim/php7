<?php

namespace Cliente;

class Cadastro extends \Cadastro // Retorna a raíz do sistema para extender a classe cadastro generica
{
	public function registrarVenda(){
		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}	
}

?>