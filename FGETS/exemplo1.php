<?php

$filename = "usuarios.csv";

if(file_exists($filename)){
	//realiza a abertura do arquivo e instancia ele no objeto
	$file = fopen($filename, "r");
//explode ou expande o titulo
	$headers = explode(",", fgets($file));
	
	$data = array();
//inicial a leitura do arquivo seguindo todos os elementos no array
	while ($row =fgets($file)) {
		$rowData = explode(",", $row); 
		$linha = array();
	}

	$linha = array();

	for($i = 0; $i < count($headers); $i++){
		$linha[$headers[$i] = $rowData[$i];
	}
	array_push($data, $linha);
}
	fclose($file);
	echo json_encode($file);

	fclose($file);
}
?>