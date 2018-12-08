<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Filipe");
$cad->setEmail("filipe@teste.com");
$cad->setSenha("123456");

//echo $cad;

$cad->registrarVenda();


?>