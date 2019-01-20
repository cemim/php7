<?php 

$image = imagecreatefromjpeg("certificado.jpg"); // Cria a imagem a partir de outra existente

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Filipe Cemim", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

// Segundo parametro é o nome do arquivo que sera gerado ao salvar
// Terceiro parametro é a qualidade do arquivo de 0 a 100
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10); 
imagejpeg($image); // Para exibir em tela, pois o parametro de salvar nao exibe em tela

imagedestroy($image);

?>