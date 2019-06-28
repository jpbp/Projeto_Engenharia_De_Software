<?php
    session_start();
    include("../Model/Pedido.php");
    include("../Persistence/Conection.php");
    include("../Persistence/ClienteDao.php");

   
    $nomeProduto=$_POST["produto"];
    
    $produto = new Produto("",$nomeProduto,"","","");


    $con = new Conection("localhost","root","","lojahogwarts");
    $con->conectar();

    $pDao = new ProdutoDao();
    
    $linha=$pDao->getProduto();

   
  
    

?>