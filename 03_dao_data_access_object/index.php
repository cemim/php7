<?php

require_once("config.php");

$root = new Usuario();

$root->loadByID(2);

echo $root;
?>