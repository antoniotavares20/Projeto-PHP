<?php
//formas de manipuação de dados e as funções da biblioteca fopem
//a partir dos modos é poissivel definir qual a operação que sera feita no arquivo

//O Ojeto fale é do tipo rinsource que faz referencia a um arquivo externo
//$file = fopen("log.txt","w+");
//testando no modo applend
	$file = fopen("log.txt","a+");
	
	//abre o conteudo no modo escrita e mantem a informação;
	 fwrite($file, date("Y-m-d H:i:s"))."\r\n";
     fclose($file);
     echo "Arquivo criado com sucesso!";

?>;