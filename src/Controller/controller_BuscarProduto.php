<?php
session_start();
include("../Model/Produto.php");
include("../Persistence/Conection.php");
include("../Persistence/ProdutoDao.php");

//pegado nome do formulario
$nome = $_POST["nome"];

//instanciando produto
$p1= new Produto($nome,"","","");

//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$produtoDAO = new ProdutoDao();

$tabela = $produtoDAO->buscarProduto($p1,$con->getLink());

if( mysqli_num_rows($tabela) == 0 ){
	$_SESSION['buscaProduto']="nada";
	
	header('Location: ../View/BuscarProduto.php');
    exit();
}
else{
    $openTable="<table class='table table-hover'>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Preco</th> 
			<th>Quantidade</th>
			<th>excluir</th>
			<th>alterar</th>
		</tr>
		</thead>";

	$bodyTable = "" ;
	

	while($row = mysqli_fetch_row($tabela)){
			$bodyTable = $bodyTable."
			<tbody>
			<tr>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td> 
				<td>".$row[4]."</td>
				<td> <a class='remover-produto' href="."../Controller/controller_ExcluirProduto.php?codigo=".$row[0].""."> <button> remover </button><a/> </td>
				<td><a href="."../View/AlterarProduto.php?codigo=".$row[0].""."> <button > alterar </button><a/>   </td>
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
	$_SESSION['buscaProduto']=$table;
	header('Location: ../View/BuscarProduto.php');
    exit();
    
}


?>