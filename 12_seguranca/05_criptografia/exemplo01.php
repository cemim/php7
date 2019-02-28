<?php 

// Constante com a chave de acesso que recebe uma String convertida em 16 bits
define("SECRET_IV", pack('a16', 'senha')); // O ideal é que seja uma hash aleatório para garantir mais segurança
define("SECRET", pack('a16', 'senha'));

// Vetor com a String que será encriptada
$data = [
	"nome"=>"Hcode"
];

// Função para encriptar
$openssl = openssl_encrypt(
	json_encode($data), // Encriptar string
	'AES-128-CBC', // Algoritmo de encriptação
	SECRET, // Chave de encriptação
	0, // Opção que informa que não precisa aguardar nenhum retorno
	SECRET_IV // Chave de encriptação
);

echo $openssl;

// Decript
$string = openssl_decrypt(
	$openssl, 
	'AES-128-CBC', 
	SECRET,
	0,
	SECRET_IV
);

echo "<br><br>";

var_dump(json_decode($string, true));

?>