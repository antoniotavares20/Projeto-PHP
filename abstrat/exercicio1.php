<?php
	interface Veiculo{
		public function acelerar($velocidade);
		public function frenar($frenar);
		public function trocarMacha($marcha);
	}

	/*
	 *caso queira implementar outra interface é necessário usar a ','
	 *A diferenca de classe e interface é que o metodo abstrato so pode ser implementada uma vez 
	 */
	abstract class Automovel implements Veiculo{
		public function acelerar($velocidade){
			echo "O Veiculo acelerou até  ". $velocidade . "Km/h";
		}
		public function frenar($frenar){
			echo "O Veiculo freiou ". $frenar . "Km/h" ;
		}
		public function trocarMacha($marcha){
			echo "O Veiculo trocou a macha". $trocarMarcha . "Km/h";
		}
	}

	class DelRey extends Automovel{
		public function empurrar(){

		}
	}
	
	$carro = new DelRey();
	$carro->acelerar(200);

?>