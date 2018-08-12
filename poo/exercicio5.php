<?php
class Endereco{
      private $logradouro;
      private $numero;
      private $cidade;
      
      //"Metodo mágico" de construção da classe, haja vista o metodo com o mesmo nome da classe estar em desuso;
      public function __construct($a, $b, $c){
      	$this->logradouro = $a;
      	$this->numero = $b;
      	$this->cidade = $c;
      }

      /*"Metodo para destruir, que pode ser utlizado para a troca de valores em bd entre outros valores padroes, sempre o ultimo a ser executado antes de liberar espaço na memoria"
	public function __destruct(){
		var_dump("destruir");
	}*/

	/*Metodo para cocatenar*/
//para converter os objetos em strings
	public function __toString(){
		return $this->logradouro.",".$this->numero.",".$this->cidade;
	}
}

$meuEndereco = new Endereco("rua ademar saraiva Leao", "123", "Santos");
//var_dump($meuEndereco);
//execulta no final do arquivo
//unset($meuEndereco);

echo $meuEndereco;
?>