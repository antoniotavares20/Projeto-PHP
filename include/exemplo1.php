<?php
//o include extende todo os codigos anterioes
//caso não exista nenhum diretorio padrao ele fara a inclusão do pacote defaut
//a inclusão está no comando include patten
//include "exemplo2.php";
// o require obriga que o arquivo esteja funcionando
// ele consegue buscar arquivo que existem externamente, e feito dinâmicamente.
//O uso do include requer cautela e cuidado, pois o seu mau uso, pode levar a inclusão de injeção;
//para evitar que o arquivo seja buscado mais de uma vez, usa se o require once.
//require "/inc/exemplo2.php";
require_once "/inc/exemplo2.php";
$result =  somar(10, 24);
echo $result;
?>