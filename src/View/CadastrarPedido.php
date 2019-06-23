<?php
session_start();
include("../Model/Cliente.php");
include("../Model/Produto.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");
include("../Persistence/ProdutoDao.php");
$c1= new Cliente("","","","","","","","","","","","");
$p1= new Produto("","","","");

$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();
$cDAO = new ClienteDao();
$pDAO = new ProdutoDao();
$resultadoC =$cDAO->buscarCliente($c1,$con->getLink());
$resultadoP =$pDAO->buscarProduto($p1,$con->getLink()); 

?>

<html>
	<head> 
    <title>Cadastro Pedido</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cadastroCliente.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
	</head>

	<body>
    <body>

<div class="Titulo">
    <h3>
        Cadastro de Pedido
    </h3>
</div>
<main class="principal">
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form method="POST" action="../Controller/controller_CadastrarPedido.php">
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="inputBruxo"> Bruxo </label>
                        <select id="inputBurxo" class="form-control" name="bruxo">
                        <option>Bruxo</option>
            <?php 
                while($row_resultado=mysqli_fetch_assoc($resultadoC)){?>
                <option value= "<?php echo $row_resultado['cpf'];?>"><?php echo $row_resultado['nome'];?>
                
                </option><?php }?>
                        </select>
                       
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="inputProduto"> Produto </label>
                        <select id="inputProduto" class="form-control" name="produto">
                        <option>Produto</option>
            <?php 
                while($row_resultado=mysqli_fetch_assoc($resultadoP)){?>
                <option value= "<?php echo $row_resultado['idProduto'];?>"><?php echo $row_resultado['nome'];?>
                
                </option><?php }?>
                        </select>
                       
                    </div>

                </div>

                <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputData"> Data </label>
                            <input type="date" class="form-control"  name="data" id="inputData" placeholder="Data" required>
                            <div class="invalid-feedback">
                                Por Favor insira um Data válido.
                            </div>
                        </div>  
                </div> 
                
                <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputPreco"> preço </label>
                            <input type="number" class="form-control"  name="preco" id="inputPreco"  required>
                            <div class="invalid-feedback">
                                Por Favor insira um Preco válido.
                            </div>
                        </div>  
                </div> 
                <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputPreco"> cpf </label>
                            <input type="number" class="form-control"  value= <?php echo $_SESSION["cpfUser"] ?>  name="cpf" id="inputcpf"   disabled>
                            <div class="invalid-feedback">
                                Por Favor insira um Preco válido.
                            </div>
                        </div>  
                </div> 

                
                <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputqtd"> quantidade </label>
                            <input type="number" class="form-control"  name="qtd" id="inputqtd" required>
                            <div class="invalid-feedback">
                                Por Favor insira um qtd válido.
                            </div>
                        </div>  
                </div> 

                <div class="form-row">
                    <div id="botao" class="col-sm-8">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

                    
</body>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>

</html>