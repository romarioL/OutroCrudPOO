<?php 

require_once 'Conexao.class.php';

 abstract class Crud extends Conexao {




	public abstract function cadastrar();



	public abstract function atualizar($id);



	public function encontrar($id) {

		$conectar = new Conexao(); 

		$link = $conectar->conectar();

		$sql = mysqli_query($link ,"SELECT * FROM usuarios WHERE id = '$id'");

		return  $sql;

	}


	public  function encontrarTodos() {

		$conectar = new Conexao(); 

		$link = $conectar->conectar();

		$sql = mysqli_query( $link ,"SELECT * FROM usuarios");

		return  $sql;

	}


	public function delete($id)  {

		$conectar = new Conexao(); 

		$link = $conectar->conectar();

		$sql = mysqli_query( $link ,"DELETE  FROM usuarios WHERE id = '$id'");

	}





}

?>