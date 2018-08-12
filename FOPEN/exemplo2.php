<?php
//converter o array do banco de dados em csv
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}
//a função age como um separador da string
echo implode(",", $headers)."\r\n";
$file = fopen("usuarios.csv", "w+");
//abertura do arquivo
fwrite($file, implode(",",$headers));
foreach ($usuarios as $row) {
	$data = array();
     //array dentro de outro se justifica pela utização do PDO que usa um array dentro de outro
	foreach ($row as $key => $value) {
	 	array_push($data, $value);
	 } //fim de coluna
	 fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);
?>