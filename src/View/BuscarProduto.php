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
	<h1>Buscar item magico</h1>
	<div>
		  <form method="POST" action="../Controller/controller_BuscarProduto.php">

		    <label for="nome"></label>
		    <input type="text"  name="nome" placeholder="Nome a ser buscado">
		    <button class="button" type="submit" name="Buscar">Buscar</button><br>
		</form>	
	<?php
		if(!empty($_SESSION['buscaProduto'])){ //se a buscaProduto não estiver vazia 

			if($_SESSION['buscaProduto']=='nada'){ // caso não haver nenhum resultadp
                echo "nenhum produto encontrado";
                unset($_SESSION['buscaProduto']);
			}
			else{

			echo $_SESSION['buscaProduto']; //retorna
			unset($_SESSION['buscaProduto']);
			}
		}
	
	
	?>	
	<?php
	if(!empty($_SESSION['excluiuProduto'])){
		echo $_SESSION['excluiuProduto'];
		unset($_SESSION['excluiuProduto']);
	}
	?>
	<?php
	if(!empty($_SESSION['alteradoProduto'])){
		echo $_SESSION['alteradoProduto'];
		unset($_SESSION['alteradoProduto']);
	}

	?>

	<script>
		let botoes = document.querySelectorAll(".remover-produto")
		botoes.forEach(botao => {
			botao.onclick = (evento) => {
				return confirm("Deseja realmente excluir?");
			}
		})
	</script>
</body>
</html>