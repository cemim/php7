<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

// Cria uma rota para exemplo01.php local.cemim.com.br
$app->get('/', function () {
    include("exemplo01.php");
});

$app->run();

?>