<?php
//este exercicio convert a informação para maiuculo

$nome = "antonio tavares";
//converte para maiuculo
echo strtoupper($nome);
echo "</br>";
//converte para menusculo
echo strtolower($nome);
echo "</br>";

// primeria palavra
echo ucwords($nome);
echo "</br>";

//converte as primeiras palavras de um nome
echo ucfirst($nome);

echo "</br>";
//converte a primeira a segunda e a terceira
echo ucwords($nome. " pereira") ;
?>

