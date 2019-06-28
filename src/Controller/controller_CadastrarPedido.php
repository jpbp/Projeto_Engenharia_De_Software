<?php
    session_start();
    include("../Model/Pedido.php");
    include("../Persistence/Conection.php");
    include("../Persistence/ClienteDao.php");
    $nomeBruxo = $_POST["bruxo"];
    $nomeProduto=$_POST["produto"];
    $r=$_SESSION['cpfUser'];
    $data = $_POST["data"];
    $descricao=$_POST["descricao"];
    $qtd=$_POST["qtd"];


    $pedido = new Pedido($date,$nomeBruxo,$nomeProduto,);

    $con = new Conection("localhost","root","","lojahogwarts");
    $con->conectar();

  
    

?>