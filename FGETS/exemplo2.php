<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MINE_TYPE);

$minetype = $fileinfo->file($filename);

//abertura de documentos estatico
$base64encode =	"data:".$minetype.";base64,".$base64;

?>

<a href="<?=$base64_encode?>" target ="_blanck"> Link para imagem </a>

<img src="<?=$base64encode?>" >