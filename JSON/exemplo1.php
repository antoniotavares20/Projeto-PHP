<?php
//modificando e decodificando objetos JSON.
$pessoas = array();
//esssa função adiciona o padrao de pessoas de uma array
//array push (vetor, vetor(parametro = valor))
array_push($pessoas, array('nome'=>'joao', "idade" => 18));

array_push($pessoas, array('nome'=>'Luiza', "idade" => 10));
print_r($pessoas);

echo json_encode($pessoas);
?>