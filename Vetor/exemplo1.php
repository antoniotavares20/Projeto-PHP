<?php
//exemplo de meses do ano utlizando um vetor simples
//percorrendo o  vetor com foreach

$meses = array("JANEIRO", "FEVEREIRO", "MARÇO","MAIO", "ABRIL", "JUNHO", "JULHO","AGOSTO", "SETEMBRO", "OUTUBRO","NOVEMBRO","DESEMBRO");

//for($i = 0; $i <= 12; $i++){
//echo "O mês".meses($i)."br";
//}

foreach ($meses as $index => $mes) {
	echo "indice" . $index. "  	";
	echo "O mes é : ". $mes."<br>";
}
?>