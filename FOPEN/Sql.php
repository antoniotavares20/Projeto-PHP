<?php
//PODE SER UTIL PARA REALIZAR A  ORGANIZAÇÃOD DA COMUNICAÇÃO QUE OCORRE ENTRE OS OBJETOS DE CLASSE E OS OBJETOS DE DADOS

class Sql extends PDO{
	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp2", "root", ""); 
	}	
	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($statment, $key, $value);
		}
	}

	public function setParam($statment, $key, $value){
	
		$statment->bindParam($key, $value);
	}

	public function query($rowQuery, $params = array()){
		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);
		$stmt->execute();

		return $stmt;
	}

	public function select($rowQuery, $params = array()):array
	{
		$stmt = $this->query($rowQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	


}


?>