<?php
//trabalhando com json decode e manipulação de objetos
$json = '[{"nome":"joao","idade":18},{"nome":"Luiza","idade":10}]';
//se tirar o true o arquivo passa o valor como objeto;
$dado = json_decode($json, true);
print_r($dado);
?>