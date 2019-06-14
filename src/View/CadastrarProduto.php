<?php
	session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
	include("verificalogin.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro Bruxo</title>
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

    <div class="Titulo">
        <h3>
            Cadastro de Artigo Mágicco
        </h3>
    </div>
    <main class="principal">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form method="POST" action="../Controller/controller_CadastrarProduto.php">
                    <div class="form-row">
                        <div class="form-group col-sm-12">

                            <label for="inputNome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="inputNome" placeholder="nome" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputPreco"> Preço </label>
                            <input type="number" class="form-control" name="preco" id="inputPreco" placeholder="preco" required>
                            <div class="invalid-feedback">
                                Por Favor insira um Preço válido.
                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="inputResidencial"> Quantidade </label>
                            <input type="number" class="form-control" name="quantidade" id="inputResidencial" placeholder="quantidade" required>
                            <div class="invalid-feedback">
                                Por Favor insira uma quantidade válido.
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputDescricaçao"> Descriçao </label>
                            <input type="text" class="form-control" id="inputDescricaçao" name="descricao" placeholder="descricaçao" required>
                            <div class="invalid-feedback">
                                Por Favor insira um Descricaçao válido.
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
    <?php
    if(!empty($_SESSION['produto'])){
        if($_SESSION['produto']){
            echo "<script>alert('Produto Cadastrato  com sucesso !');</script>";
            unset($_SESSION['produto']);
        }
        else{
            echo "<script>alert('Produto não foi Cadastrato  :( !');</script>";
            unset($_SESSION['produto']);
        }
    }
    ?>
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