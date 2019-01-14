<?php 

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename)); // Lê o binário do arquivo e converte em string

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename); // Pega o mime type do arquivo. Por exemplo: image/png

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?= $base64encode ?>"" target="_blank"> Link Para Imagem</a>


<img src="<?= $base64encode ?>" >