<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Buscar Produto</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="imagens/hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/buscar.css">
</head>
<body>
<div class="Titulo">
        <h1>Buscar Artigos Mágicos</h1>
    </div>
	<div>
		  <form class="form-dark" method="POST" action="../Controller/controller_BuscarProduto.php">

		    <div class="input-group mb-3 col-sm-6 barraPesquisa">
                    <input type="text" class="form-control " placeholder="Você jura solenemente não fazer nada de bom?" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
            </div>
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
	<!-- Icones decorativos-->
	<script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
	
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