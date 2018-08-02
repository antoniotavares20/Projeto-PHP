<?php
//exemplo de aplicação do looping
	$total = 100;
	$desconto = 0.2;

	do{
		$total += $desconto;
}while($total < 100);
	echo $total;
	
?>