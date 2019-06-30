<?php
session_start();
include("../Model/Pedido.php");
include("../Persistence/Conection.php");
include("../Persistence/PedidoDao.php");

//pegado nome do formulario
$numPedido= $_POST["numPedido"];

//instanciando Pedido


//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$pedido = new Pedido($numPedido,"","","","","","","","","","","","");

$PedidoDAO = new pedidoDao();
$tabela1 = $PedidoDAO->buscarPedido($numPedido,$con->getLink());




if( mysqli_num_rows($tabela1) == 0 ){
	$_SESSION['pedido']="nada";
	
	header('Location: ../View/BuscarPedido.php');
    exit();
}
else{
    
	$openTable="<table class='table table-hover'>
	<thead>
		<tr>
			<th> idPedido</th>
			<th> idProduto</th>
			<th>qtd</th> 
			<th>cpfCliente</th>
			<th>cpfGerente</th>
			<th>Produto</th>
			<th>preco</th>
			<th>excluir</th>
			<th>alterar</th>
		</tr>
		</thead>";

	$bodyTable = "" ;
	

	while($row = mysqli_fetch_row($tabela1)){
			$bodyTable = $bodyTable."
			<tbody>
			<tr>
				<td>".$row[12]."</td>
				<td>".$row[13]."</td> 
				<td>".$row[14]."</td>
				<td>".$row[4]."</td>
				<td>".$row[3]."</td>
				<td>".$row[15]."</td>
				<td>".$row[16]."</td>
				<td> <a href="."../Controller/controller_ExcluirPedido.php?codigo=".$row[0].""."> <button > remover </button><a/> </td>
				<td><a href="."../View/AlterarPedido.php?codigo=".$row[0].""."> <button > alterar </button><a/>   </td>
			</tr>
			</tbody>";
			
		}
	$closeTable ="</table>";

	$table = "<!DOCTYPE html>
			<html lang=\"pt-br\">

			<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
			<link href='../View/Bootstrap/css/bootstrap.min.css' rel='stylesheet'>
			</header>

			<body>".$openTable.$bodyTable.$closeTable.
				

			"</body>

            </html>";
    
	$_SESSION['pedido']=$table;
	header('Location: ../View/BuscarPedido.php');
    exit();
}


?>