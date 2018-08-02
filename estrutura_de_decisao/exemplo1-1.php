<?php
//A importancia de implementar o if e else 
//pensando na perspectiva de manutenção das 
//regras de negócio
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;
$qualASuaIdade = 30;
if($qualASuaIdade < 21){
	echo "Criança";
} else if ($qualASuaIdade < $idadeMaior){
	echo "Idoso";
} else if ($qualASuaIdade < $idadeMaior){
	echo "Adolecente";
} else if ($qualASuaIdade < $idadeMelhor){
	echo "Adulto";
} else {
	echo "Idoso";
};

echo "</br>";
	//formas de emprego do else
	//operador else, operador ternario "?" == então seguido de ':';
echo($qualASuaIdade < $idadeMaior)?"Maior de Idade" : "Menor de atenção";
echo "</br>";

echo($qualASuaIdade < $idadeCrianca)?"Não é crianca": "Maior de todadas idades";
?>