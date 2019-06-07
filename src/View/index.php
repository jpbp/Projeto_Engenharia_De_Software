<?php
	session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
	include("verificalogin.php");
?>	
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<style type="text/css">
  		
  	</style>
</head>
<body>
	<div align="right">
		<p> <?php echo $_SESSION['usuario']; ?> </p>
		<a href="logout.php">Sair</a>
	</div>
	<h1 align="center">Bem vindo a loja Hogwarts</h1>
	<a href="CadastrarCliente.php">Cadastrar cliente</a><br>
	<a href="BuscarCliente.php">Buscar Cliente</a>
</body>
</html>

