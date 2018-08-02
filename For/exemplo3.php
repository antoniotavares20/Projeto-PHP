<?php
//Exemplos luping infinito; 
//Como o php somente faz analise sintatica o consumo da memoria pode ser elevado.
//trabalhando com datas e com o uso do for
echo "<select>" ;
for ($i = date("Y");  $i >= date("Y") - 100; $i--){
	echo '<option value= "'. $i.'">'.$i.'</option>';
}
echo "</select>";
?>