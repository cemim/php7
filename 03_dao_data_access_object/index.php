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
//$usuario = new Usuario();
//$usuario->login("root", "12345");
//echo $usuario;

// Inserir novo usuário
//$aluno = new Usuario("aluno","123456");
//$aluno->insert();
//echo $aluno;

// Atualizar usuário
//$usuario = new Usuario();
//$usuario->loadById(4);
//$usuario->update("professor", "novasenha");

// Excluir usuário
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;

?>