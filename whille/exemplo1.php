<?php
	$condicao = true;
while ($condicao) {
	$numero = rand(1,100);
	echo $numero;
	if($numero === 3){

		echo "Tres";
		$condicao = false; 
	}
}
?>