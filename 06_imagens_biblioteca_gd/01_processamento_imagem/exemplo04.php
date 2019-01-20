<?php 

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

/* Método completo
$data = getimagesize($file);
$width = $data[0];
$height = $data[1];
*/

//Método resumido
list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height); // Cria a imagem com as novas dimensoes para a thumbnail
$old_image = imagecreatefromjpeg($file); // Cria a imagem com o tamanho padrão

// Função para criar thumbnail
// dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>