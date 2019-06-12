<?php
	session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
	include("verificalogin.php");
?>	
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="imagens/hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menuPrincipal.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
    <script>
        // cria uma função home onde ao ser chamada pega a tag de id frame e altera o valor do atributo src
        // document faz com que o javascript entre no DOM e getElementById procura o elemento com o id descrito dentro dos parentesses
        // ainda a posiblidade de usar Jquery framework js
        //função home usando jquery:
        // $("#home").click(function(){
        //    $("#frame").attr("src", "home.html");
        // });
        // no caso do jquery não utiliza o atributo onclick dentro da tag como você vai ver mais a baixo
        // para mais jquery: https://jquery.com/
        function home() {
            document.getElementById("frame").src = "home.php";
        }

        function CadastrarBruxo() {
            document.getElementById("frame").src = "CadastrarCliente.php";
        }

        function BuscarBruxo() {
            document.getElementById("frame").src = "BuscarCliente.php";
        }

    </script>

</head>

<body class="row">
    <div class="col-3  barra-lateral" style="padding-right: 0 !important">
        <nav class="nav flex-column">

            <img src="imagens/hogwarts.png" alt="Hogwarts">

            <h3>Loja Hogwarts</h3>

            <div class="menu-list">

                <ul class="menuLink" id="nav">

                    <li id="home" onclick="home()" class="button">
                        <a><i class="fab fa-fort-awesome"></i> Home
                        </a>
                    </li>
                    <!-- Bruxos -->
                    <li data-toggle="collapse" data-target="#bruxos" class="collapsed active bruxos">
                        <a><i class="fas fa-hat-wizard"></i></i> Bruxos<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="bruxos">
                        <!-- Submenu -->
                        <li id="CadastrarBruxo" onclick="CadastrarBruxo()" class="button"><a><i class="fas fa-angle-right"></i>  Cadastrar </a></li>
                        <li id="BuscarBruxo" onclick="BuscarBruxo()" class="button"><a><i class="fas fa-angle-right"></i> Buscar </a></li>

                    </ul>
                    <!-- Artigos mágicos -->
                    <li data-toggle="collapse" data-target="#produtos" class="collapsed active">
            
                            <a><i class="fas fa-broom"></i> Artigos Mágicos <span class="arrow"></span> </a> 
                    </li>
                    <ul class="sub-menu collapse" id="produtos">
                        <!-- Submenu -->
                        <li id="CadastrarProduto" onclick="CadastrarProduto()" class="button"><a>Cadastrar </a></li>
                        <li id="BuscarProduto" onclick="BuscarProduto()" class="button"><a>Buscar </a></li>

                    </ul>

                    <!-- Pedidos -->
                    <li data-toggle="collapse" data-target="#pedidos" class="collapsed active">
                        <a><i class="fas fa-cash-register"></i> Pedidos <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="pedidos">
                        <!-- Submenu -->
                        <li id="CadastrarPedido" onclick="CadastrarPedido()" class="button"><a>Cadastrar </a></li>
                        <li id="BuscarPedido" onclick="BuscarPedido()" class="button"><a>Buscar </a></li>

                    </ul>

                    <!-- Relatório-->
                    <li>
                        <a>
                            <i class="fas fa-chart-line"></i> Relatório
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Barra do topo  -->
    <div class="col" style="padding-left: 0 !important">
        <div>
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand mb-0 h1"></span>
                <div id="login">
                    <?php echo $_SESSION['usuario'];?> 
                    <a href = "logout.php"><i class="fas fa-door-open"></i></a>
                </nav>
            </div>
            <div>
                <iframe id="frame" src="home.php" frameborder="0"></iframe>
            </div>
        </div>



        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js " integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js " integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb " crossorigin="anonymous "></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js " integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn " crossorigin="anonymous "></script>
</body>

</html>;