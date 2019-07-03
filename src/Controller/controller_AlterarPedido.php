<?php
    session_start();
    include("../Model/Pedido.php");
    include("../Persistence/Conection.php");
    include("../Persistence/PedidoDao.php");
    include("../Persistence/ProdutoDao.php");
    include("../Model/Produto.php");
    include("../Persistence/ItemPedidoDao.php");
    include("../Model/ItemPedido.php");

    
    $cep = $_POST["cep"];
    $logradouro = $_POST["logradouro"];
  
    $cidade=$_POST["cidade"];
    $numero=$_POST["numero"];
    $estado=$_POST["estado"];
    $complemento=$_POST["complemento"];
    $preTotal=$_POST["preco"];
    $qtd=$_POST['qtd'];
    $preco=$_POST['preco'];
    $idNum=$_POST["produto"];


    $con = new Conection("localhost","root","","lojahogwarts");
    $con->conectar();

//busca nome do produto

    $p1= new Produto($idNum,"","","");
    $pDAO = new ProdutoDao();
    $resultadoP =$pDAO->buscarProdutoFormulario($idNum,$con->getLink());
    while($row = mysqli_fetch_row($resultadoP)){
      $nome=$row[1];
    }
  
   

    
   $item=new ItemPedido("",$idNum,$qtd,$nome,$preco*$qtd);
 
   $itemDao=new ItemPedidoDao();
 
   $itemDao->alterarItemPedido($item,$con->getLink(),$_SESSION['idP']);
   unset($_SESSION['idP']);

    $_SESSION['alteradoPedido']="<script>alert('Pedido alterado com sucesso!');</script>";
	header('Location: ../View/BuscarPedido.php');
    exit();
?>