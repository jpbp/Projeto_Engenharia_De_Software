<?php  

session_start();
include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");


$nome = $_POST["nome"];

$c1= new Cliente($nome,"","","","","","","","","","","");

//conexao com banco de dados
$con = new Conection("localhost","root","123","lojahogwarts");
$con->conectar();

$cDAO = new ClienteDao();

$tabela = $cDAO->buscarCliente($c1,$con->getLink());




if( mysqli_num_rows($tabela) == 0 ){
	$_SESSION['busca']="nada";
	
	header('Location: ../View/BuscarCliente.php');
    exit();
}
else{
	$openTable="<table style=\"width:100%\" border=\"1\">
		<tr>
			<th>Nome</th>
			<th>CPF</th> 
			<th>Celular</th>
			<th>excluir</th>
			<th>alterar</th>
		</tr>";

	$bodyTable = "" ;
	

	while($row = mysqli_fetch_row($tabela)){
			$bodyTable = $bodyTable."<tr>
				<td>".$row[0]."</td>
				<td>".$row[1]."</td> 
				<td>".$row[3]."</td>
				<td> <a href="."../Controller/controller_ExcluirCliente.php?codigo=".$row[1].""."> <button > remover </button><a/> </td>
				<td><a href="."../View/AlterarCliente.php?codigo=".$row[1].""."> <button > alterar </button><a/>   </td>
			</tr>";
			
		}
	$closeTable ="</table>";

	$table = "<!DOCTYPE html>
			<html lang=\"pt-br\">

			<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
			</header>

			<body>".$openTable.$bodyTable.$closeTable.
				

			"</body>

			</html>";
	$_SESSION['busca']=$table;
	header('Location: ../View/BuscarCliente.php');
    exit();
}

?>

