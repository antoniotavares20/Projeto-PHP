<?php

//trabalhando com lista bidimensional
$pessoas = array();
//esssa função adiciona o padrão de pessoas de uma array
//array push (vetor, vetor(parametro = valor))
array_push($pessoas, array('nome'=>'joao', "idade" => 18));

array_push($pessoas, array('nome'=>'Luiza', "idade" => 10));
print_r($pessoas);

echo json_encode($array);
?>