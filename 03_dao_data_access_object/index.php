<?php

require_once("config.php");

// Carrega um usuário
//$root = new Usuario();
//$root->loadByID(2); 
//echo $root;

// Carrega uma lista de usuários com método estático
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("fi");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "12345");
echo $usuario;
?>