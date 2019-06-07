<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscar Bruxo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Buscar Bruxo</h1>
	<div>
		  <form method="POST" action="../Controller/controller_BuscarCliente.php">

		    <label for="nome"></label>
		    <input type="text"  name="nome" placeholder="Nome a ser buscado">
		    <button class="button" type="submit" name="Buscar">Buscar</button><br>
		</form>	
	<?php
		if(empty($_SESSION['busca'])){
			
		}
		else if($_SESSION['busca']=='nada'){
			echo "nenhum usuario encontrado";
		}
		else
		{
			echo $_SESSION['busca'];
			unset($_SESSION['busca']);
		}
	?>	
	<?php
	if(!empty($_SESSION['excluiu'])){
		echo $_SESSION['excluiu'];
		unset($_SESSION['excluiu']);
	}
	?>
	<?php
	if(!empty($_SESSION['alterado'])){
		echo $_SESSION['alterado'];
		unset($_SESSION['alterado']);
	}

	?>
</body>
</html>