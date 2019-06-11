<?php
// é basicamente o verifica do site

if(!$_SESSION['usuario']){ // se não existe usuario ele volta pro login
	session_destroy();
	header('Location: login.php');
  	exit();
}




?>