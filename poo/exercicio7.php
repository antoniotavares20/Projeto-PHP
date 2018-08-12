<?php
	//A Classe pai não herda caracteristica da classe filha
	//A Organização das classes e metodos

	class Documento{
		private $numero;

		public function getNumero(){
			return $this->numero;	
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}
	}
	//obs o filho nunca herda metodos privados
	class CPF extends Documento{
		public function validar():bool{
			$nuemroCPF = $this->getNumero();
			return true;
		}
	}
$doc = new CPF();
$doc->setNumero("2345676432");
$doc->validar();

?>