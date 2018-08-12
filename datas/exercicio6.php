<?php
//função para adiconar data 
$dt = new DateTime();
//conforme especificação do php.net
//$periodo = new DateInterval("PISD");

$periodo = new DateInterval();
//classe que soma e caucula a data
echo $dt ->format("d/m/y H:i:s");

//metodo para adicionar caso queira subitrair  metodo sub da variavel dt o periodo ou o intervalo existente.

$dt -> add($periodo);

echo "</hr>";

echo $dt ->format("d/m/y H:i:s");


?>