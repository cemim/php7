<?php

abstract class Animal
{
	public function falar(){
		return "som";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal
{
	public function falar()
	{
		return "Late";
	}
}


class Gato extends Animal
{
	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal
{
	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " . parent::mover(); //Chama o método do pai
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/><br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/><br/>";

$piupiu = new Passaro();

echo $piupiu->falar() . "<br/>";
echo $piupiu->mover() . "<br/>";

?>