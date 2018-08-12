<?php
class Pessoa{
	public $nome = "Rasmus Lendors";
	protected $idade = "48";
	private $senha = "123456";
/*Nome pessoa, metodo privado que consegue acessar os dados do objeto */
	public function verDados(){
	echo $this->nome."<br>";
	echo $this->idade."<br>";
	echo $this->senha."<br>"; 
}

	public function verIdade(){
		echo $this->idade;
	}	
}

//é herdado todos os metodos exerto os definidos como private
class Progamador extends Pessoa{
		public function verDados(){
			//este método retorna o nome da classe em questão
			echo get_class($this)."<br>";
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>"; 
}
}
$pessoa1 = new Pessoa();
$pessoa2 = new Progamador();
//echo $pessoa1->nome;
//echo $pessoa1->senha;
//echo $pessoa1->verIdade();
echo $pessoa1->verDados();
echo $pessoa2->verDados();
?>