<?php 

/**
	Title: Inserir Imagem com fonte externa
*/

$image = imagecreatefromjpeg("certificado.jpg"); // Cria a imagem a partir de outra existente

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


// Após o tamanho da fonte (terceiro parametro) é a orientação vertical ou horizontal
imagettftext($image, 32, 0, 320, 250, $titleColor, 
	__DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 375, 350, $titleColor, 
	__DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Filipe Cemim");

imagestring($image, 3, 410, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image); 


imagedestroy($image);

?>