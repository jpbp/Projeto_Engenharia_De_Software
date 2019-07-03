<?php
session_start();
include("../Model/Pedido.php");
include("../Persistence/ItemPedidoDao.php");
include("../Persistence/PedidoDao.php");
include("../Persistence/Conection.php");

//pegando o id pelo href
$id = $_GET["codigo"];
$idP=$_GET["idP"];




//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$itempedido= new ItemPedidoDao();
$itempedido->removerItempedido($id,$con->getLink());	
$PedidoDAO = new PedidoDao();
$PedidoDAO->removerPedido($id,$con->getLink());





$_SESSION['excluiuPedido']="<script>alert('Excluido com sucesso!!');</script>";
header('Location: ../View/BuscarPedido.php');
exit();    


?>