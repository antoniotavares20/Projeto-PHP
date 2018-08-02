<?php
//trabalhando com matriz 

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Gol";
$carros[0][3] = "Onix";

$carros[1][1] = "Ford";
$carros[1][2] = "Fiesta";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
//array bi dimencional que traz o utimo valor de um vetor bidimencional
//imprime o ultimo valor do array bidimensional por meio da função 'end'
echo end($carros[1]);
?>