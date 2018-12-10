<?php

interface Veiculo {
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}
// Classes abstratas não podem ser estanciadas
abstract class Automovel implements Veiculo {
	public function acelerar($velocidade)
	{
		echo "O veiculo acelerou até " . $velocidade . "Km/h";
	}

	public function frenar($velocidade)
	{
		echo "O veiculo frenou até " . $velocidade . "Km/h";
	}

	public function trocarMarcha($marcha)
	{
		echo "O veiculo engatou a marcha " . $marcha;
	}			
}
?>