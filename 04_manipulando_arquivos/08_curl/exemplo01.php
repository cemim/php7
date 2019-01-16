<?php 

// Consumir o WEB SERVICE http://viacep.com.br/

$cep = "91120250";
$link = "http://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Informa como vai acontecer a transferência e o 1 informa que será retornado um valor
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Verifica se existe registro em algum órgão quando for https, 0 indica que não será verificado

$response = curl_exec($ch); // Executa a consulta e retorna um JSON

curl_close($ch); // Encerra o cURL

$data = json_decode($response, true); // Transforma o JSON em array com o parametro true, sem o mesmo ele transforma em um objeto

print_r($data["logradouro"]);

?>