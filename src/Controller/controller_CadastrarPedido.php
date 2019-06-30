<?php
    session_start();
    include("../Model/Produto.php");
    include("../Persistence/Conection.php");
    include("../Persistence/ProdutoDao.php");




    $idNum=$_POST["numero"];
    $data=$_POST["data"];
    $preco=$_POST["preco"];
    
    $idproduto=$_POST["produto"];
    $qtd=$_POST["qtd"];
    $pretotal=$preco*$qtd;

    echo $idNum," ",$data," ",$idproduto," ",$qtd;
  
    $con = new Conection("localhost","root","","lojahogwarts");
    $con->conectar();

    $produtoDAO = new ProdutoDao();
    $tabela = $produtoDAO->buscarProdutoFormulario($idproduto,$con->getLink());

if( mysqli_num_rows($tabela) == 0 ){
	$_SESSION['buscaProduto']="nada";
	
	header('Location: ../View/CadastrarPedido.php');
    exit();
}
else{
    
	
    $bodyTable="";
	while($row = mysqli_fetch_row($tabela)){

			$bodyTable = $bodyTable."
			<tbody>
			<tr>
				<td>".$row[1]."</td>
				<td>".$qtd."</td> 
				<td>".$preco."</td>
                <td>".$pretotal."</td>
                
			</tr>
			</tbody>";
			
        }
    array_push($_SESSION["preco"],$preco);
    array_push($_SESSION["array"],$idproduto);
    array_push($_SESSION["qtd"],$qtd);
	$_SESSION["precoTotal"]+=$pretotal;
    echo $_SESSION['t']=$_SESSION['t'].$bodyTable;
    header('Location: ../View/CadastrarPedido.php'); //volta para pagina cadastro
    exit(); 
    
}

    



    
?>