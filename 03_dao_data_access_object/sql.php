<?php

class Sql extends PDO {
	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($statment, $parameter = array()){

		foreach ($parameter as $key => $value) {
			$this->setParam($key, $value);
		}

	}

	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array()){

		// Método prepare da classe PDO
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		return  $stmt->execute();
	}
}

?>