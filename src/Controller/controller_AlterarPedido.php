<?php
    session_start();
    include("../Model/Pedido.php");
    include("../Persistence/Conection.php");
    include("../Persistence/PedidoDao.php");

     
    $cep = $_POST["cep"];
    $logradouro = $_POST["logradouro"];
  
    $cidade=$_POST["cidade"];
    $numero=$_POST["numero"];
    $estado=$_POST["estado"];
    $complemento=$_POST["complemento"];
    $preTotal=$_POST["precoTotal"];
    $pedido= new Pedido("","",$logradouro,$cidade,$complemento,$numero,$estado,$cep,"","",$preTotal);
    $con = new Conection("localhost","root","","lojahogwarts");
    $con->conectar();

    $PedidoDAO = new PedidoDao();
    $PedidoDAO->alterarPedido($pedido,$con->getLink());

    $_SESSION['alteradoPedido']="<script>alert('Pedido alterado com sucesso!');</script>";
	header('Location: ../View/BuscarPedido.php');
    exit();
?>