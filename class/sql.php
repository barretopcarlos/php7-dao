<?php 

class Sql extends PDO{   //PDO classe nativa do PHP

	private $conn;


	//Método Construtor de conexão com o banco
	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dvphp7", "root", "");

	}

	//Método para setar os parametros da query
	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {
		
			$this->setParam($key, $value);

		}

	}

	//Método para setar um único parâmetro
	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);

	}

	//Método para montar uma Query com os parametros
	public function query($rawQuery, $params = array()){   

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParam($stmt, $params);

		$stmt->execute();

		return $stmt;

	} 

	//Método para um select
	public function select($rawQuery, $params = array()):array{

		$this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

 ?>