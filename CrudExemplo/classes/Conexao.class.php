<?php 

 class Conexao {
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $db = "phpoo";

	protected $conexao;

	public function conectar() {

		if(!isset($this->conexao)):

		mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->db);

	    endif;

	    return $this->conexao;



	}

}

?>