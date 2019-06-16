<?php
session_start();
include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ProdutoDao.php");

//pegando o id pelo href
$id = $_GET["codigo"];




//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

	
$ProdutoDAO = new ProdutoDao();
$ProdutoDAO->removerProduto($id,$con->getLink());


$_SESSION['excluiuProduto']="<script>alert('Excluido com sucesso!!');</script>";
header('Location: ../View/BuscarProduto.php');
exit();    




?>