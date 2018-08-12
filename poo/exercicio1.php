<?php
class Pessoa{
	public $nome;

	function falar(){
//variavel que ja existe na classe por default, pois representa a classe ja instanciada ou o objeto dentro dessa propia classe;
	return "O meu nome é ".$this->nome;	
	}
}

$antonio = new Pessoa();
$antonio->nome = "Antonio Tavares";
echo $antonio->falar();
?>