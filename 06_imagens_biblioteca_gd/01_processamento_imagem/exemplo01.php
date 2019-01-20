<?php

header("Content-Type: image/png"); // Informa que esse arquivo vai ser do tipo PNG

$image = imagecreate(256, 256); // Informa que a imagem terá 256 px de largura e altura

$black = imagecolorallocate($image, 0, 0, 0); // Define a cor em RGB do fundo da imagem

$red = imagecolorallocate($image, 255, 0, 0); // Define a cor em RGB da frente da imagem

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red); // Escreve na tela (fonte, x margem, y margem, string, color)

imagepng($image); // Formato que será gerado

imagedestroy($image);

?>