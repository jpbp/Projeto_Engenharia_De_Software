<?php
    session_start();
    include("../Model/ItemPedido.php");
    include("../Persistence/Conection.php");
    include("../Persistence/ItemPedidoDao.php");
    include("../Model/Cliente.php");
    include("../Persistence/ClienteDao.php");
    include("../Model/Produto.php");
    include("../Persistence/ProdutoDao.php");
    include("../Model/Pedido.php");
    include("../Persistence/PedidoDao.php");

    
    //pedido
    $qtd=$_SESSION['qtd'];
    $array=$_SESSION['array'];
    $arrayPre=$_SESSION["preco"];
    
        $con = new Conection("localhost","root","","lojahogwarts");
        $con->conectar();
        $idpedido=$_POST["idPedido"];
        $data=$_POST["data"];
        $cpfCliente=$_POST["bruxo"];
        $cep=$_POST["cep"];
        $log=$_POST["logradouro"];
        $num=$_POST["numero"];
        $cidade=$_POST["cidade"];
        $estado=$_POST["estado"];
        $com=$_POST["complemento"];
        $preTotal=$_POST["precoTotal"];

       
        $c1= new Cliente("",$cpfCliente,"","","","","","","","","","");
        
        $cDAO = new ClienteDao();
        $pDao= new ProdutoDao();
        $resultadoC =$cDAO->buscarClienteFormulario($c1,$con->getLink());
        
        
        while($row1=mysqli_fetch_row($resultadoC)){
            $nomeBruxo=$row1[0];
        }
       
         

        $pedido = new Pedido($data,$nomeBruxo,$log,$cidade,$com,$num,$estado,$cep,$_SESSION['cpfUser'],$cpfCliente , $preTotal);
        $pedidoDao=new PedidoDao();
        $pedidoDao->cadastrarPedido($idpedido,$data,$nomeBruxo,$log,$cidade,$com,$num,$estado,$cep,$_SESSION['cpfUser'],$cpfCliente , $preTotal,$con->getLink());
     


        //-------------------- itempedido---------------------

   
    $arr_length = count($qtd); 
    for($i=0;$i<$arr_length;$i++) 
    {   
        $resultadoP =$pDao->buscarProdutoFormulario($array[$i],$con->getLink());
        while($row2=mysqli_fetch_row($resultadoP)){
            $nomeProduto=$row2[1];
        }
        
     
        $item=new ItemPedido($idpedido,$array[$i],$qtd[$i],$nomeProduto,$arrayPre[$i]*$qtd[$i]);
        $itemDao=new ItemPedidoDao();
        $itemDao->adicionarItem($item,$con->getLink());
    }
    $_SESSION['t']="";
    $_SESSION["precoTotal"]=0;
    $_SESSION["array"]=[];
    $_SESSION["qtd"]=[];
    $_SESSION["preco"]=[];
    $_SESSION['c2Pedido']="<script>alert(' Pedido Cadastrado com sucesso!!');</script>";
    header('Location: ../View/CadastrarPedido.php'); //volta para pagina cadastro
    exit(); 

    
    
?>