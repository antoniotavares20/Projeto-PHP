<?php
class Carro{
private	$modelo;
private $simbolo;
private $ano;
private $motor;
public function getModelo(){
//onde this é uma variavel interna
//o this quando a classe ja instancia age como um objeto internamente
	return $this->modelo;
}
public function setModelo($modelo){
	$this->modelo = $modelo;
}

public function getSimbolo(){
	return $this->simbolo;
	}

public function setSimbolo($simbolo){
	$this->simbolo = $simbolo;
}
public function getAno():int{
	return $this->ano;
}

public function setAno($ano){
		return $this->ano =$ano;
}

public function getMotor():float{
	return $this->motor;
}

public function setMotor($motor){
		return $this->motor =$motor;
}

public function exibir(){
	return array(
			"Modelo"=> $this->getModelo(),
			"Simbolo" => $this->getSimbolo(),
			"Ano"=> $this->getAno(),
			"Moroe"=> $this->getMotor()

	);
  }
}
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setAno("2002");
$gol->setSimbolo("VW");
$gol->setMotor("1.20");

print_r($gol->exibir());

echo "<hr>";
//mostra o tipo de dado retornado
var_dump($gol->exibir());
echo "<hr>";
echo $gol->getMotor()*2;
?>