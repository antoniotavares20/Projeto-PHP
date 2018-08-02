<?php
$nome = "Hcode";
$site = "www.hcode.com.br";
$ano = 1990;
$salario = 5000.99;
$bloqueado= false;
//////////////////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];

//var_dump ($frutas[2]);
//exemplo de instanciação do metodo Date;
$nascimento = new DateTime();

//var_dump ($nascimento);

//exibe o tipo de dado 
//para todo o tipo de arquivos

//var_dump($nascimento);
////////////////////////////////////////////

$arquivo = fopen("exemplo3.php", "r");
//var_dump($arquivo);

///////////////////////////////////////
//escrevendo o tipo de dado especiais
$nula = null; //null destroi a variavel
$vasio = " ";
var_dump($nula);
?>
