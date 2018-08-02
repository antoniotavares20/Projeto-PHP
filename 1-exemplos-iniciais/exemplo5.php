<?php
$nome = "Filisbina";
echo "Exemplo de variavel Global </br>";
echo $nome;
// funções de manipulação de tags hmtl
echo "</br>";

//exemplo de função 
function teste(){
	//palavra reseverda que usa o escopo da variavel global
	global $nome;
	echo $nome;
}

//exemplo de declaração de uso de uma variavel de escopo global
function teste2(){
global $nome;
echo $nome;
}	
//exemplo de execução de funções simples php
echo "  Teste 1 </br>";
teste(); 
echo "</br>";
echo "  Teste 2 </br>";
teste2();
?>