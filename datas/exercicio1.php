<?php
//funcao data
//echo date("d/m/Y H:i:s", 1532227347);

echo '<hr>';
//o time stup pode ser utlizado para refatorar e gravar data hora
//bizuzaço!!!

//converte a data em time
//$ts = strtotime("2001-09-11"); //timeStep desse dia;
$ts = strtotime("+4 week"); //timeStep desse dia;

echo  $ts ;
echo '<hr>';
echo date("l, d/m/Y", $ts);
echo '<hr>';

//data de hoje
//$ts = strtotime();



echo time();


?>