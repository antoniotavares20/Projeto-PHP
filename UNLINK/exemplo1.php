<?php
//cria o arquivo
$file = fopen("teste.txt", "w+");
fclose($file);
unlink("teste.txt");
echo "arquivo removido com sucesso";
?>