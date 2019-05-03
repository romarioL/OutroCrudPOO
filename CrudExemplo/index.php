<?php require_once 'classes/Usuarios.class.php'; ?>

<?php  $usuarios  = new Usuarios();

$usuarios->setNome("Romario");

$usuarios->setEmail("estreladamanha585@gmail.com");

 $usuarios->cadastrar();

?>