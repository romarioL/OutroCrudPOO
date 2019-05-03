<?php

require_once 'classes/Usuarios.class.php';

$id= $_GET['id'];

$nome = $_GET['nome'];

$email = $_GET['email'];


$usuarios = new Usuarios();

$usuarios->setNome($nome);

$usuarios->setEmail($email);

$usuarios->delete($id);

header('location: index.php');


 ?>