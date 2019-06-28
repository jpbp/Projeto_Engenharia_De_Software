<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <title>Buscar Pedido</title>
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
        <h1>Buscar Pedido</h1>
    </div>
    <main>
        <div>
            <!-- Código do input buscar-->
            <form class="form-dark"  method="POST" action="../Controller/controller_BuscarPedido.php" >
                <div class="input-group mb-3 col-sm-6 barraPesquisa">
                    <input type="number" name="numPedido" class="form-control " placeholder="Você jura solenemente não fazer nada de bom?" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php
		if(!empty($_SESSION['pedido'])){ //se a buscaPedido não estiver vazia 

			if($_SESSION['pedido']=='nada'){
                echo "nenhum usuario encontrado";
            }
            else{
                echo $_SESSION['pedido'];
                unset( $_SESSION['pedido']);
            }
        }

        if(!empty($_SESSION['excluiuPedido'])){
            echo $_SESSION['excluiuPedido'];
            unset($_SESSION['excluiuPedido']);

        }
        if(!empty($_SESSION['alteradoPedido'])){
            echo $_SESSION['alteradoPedido'];
            unset($_SESSION['alteradoPedido']);

        }
        
	
	
	?>	

    <!-- Icones decorativos-->
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
</body>

</html>