<?php
// é basicamente o verifica do site
session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
if(!$_SESSION['usuario']){ // se não existe usuario ele volta pro login
	header('Location: login.php');
  	exit();
}

?>