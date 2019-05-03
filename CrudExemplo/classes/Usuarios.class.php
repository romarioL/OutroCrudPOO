<?php 
require_once 'Crud.class.php';

class Usuarios extends Crud{   

	private $nome;

	private $email;

	public function getNome() {

		return $this->nome;
	}

	public function setNome($nome) {

		$this->nome = $nome;
	}

	public function getEmail() {

		return $this->email;
	}

	public function setEmail($email) {

		$this->email = $email;
	}

	public function cadastrar() {

		$conectar = new Conexao(); 

		$link = $conectar->conectar();

		$sql = mysqli_query($link, "INSERT INTO usuarios(nome, email)  VALUES ('$this->nome', '$this->email')");



	
	}	

	public function atualizar($id) {


		$conectar = new Conexao(); 

		$link = $conectar->conectar();

		

	}

}
?>