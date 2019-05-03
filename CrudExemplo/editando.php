<?php

require_once 'classes/Usuarios.class.php';

$nome = $_POST['nome'];

$email = $_POST['email'];

$id = $_POST['id'];

$usuarios = new Usuarios();

 $usuarios->setNome($nome);
 $usuarios->setEmail($email);
 $usuarios->atualizar($id);

 header('location: index.php');




 ?>