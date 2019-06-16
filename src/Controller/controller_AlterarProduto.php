<?php
    session_start();
    include("../Model/Produto.php");
    include("../Persistence/Conection.php");
    include("../Persistence/ProdutoDao.php");

    $id = $_SESSION['id']; 
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $qtd = $_POST["quantidade"];
    $descricao=$_POST["descricao"];
    $p1= new Produto($nome,$preco,$qtd,$descricao);
    $con = new Conection("localhost","root","","lojahogwarts");
    $con->conectar();

    $produtoDAO = new ProdutoDao();
    $produtoDAO->alterarProduto($p1,$con->getLink());

    $_SESSION['alteradoProduto']="<script>alert('Produto alterado com sucesso!');</script>";
	header('Location: ../View/BuscarProduto.php');
    exit();
?>