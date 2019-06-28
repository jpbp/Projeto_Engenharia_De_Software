<?php  

session_start();
include("../Model/Funcionario.php");
include("../Persistence/Conection.php");
include("../Persistence/FuncionarioDao.php");


$nome = $_POST["nome"];

$f1= new Funcionario($nome,"","","","","","","","","","","","","");

//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$fDAO = new FuncionarioDao();

$tabela = $fDAO->buscarFuncionario($f1,$con->getLink());




if( mysqli_num_rows($tabela) == 0 ){
	$_SESSION['busca']="nada";
	
	header('Location: ../View/BuscarCliente.php');
    exit();
}
else{
	$openTable="<table class='table table-hover'>
	<thead>
		<tr>
			<th>Nome</th>
			<th>CPF</th> 
			<th>Celular</th>
			<th>excluir</th>
			<th>alterar</th>
		</tr>
		</thead>";

	$bodyTable = "" ;
	

	while($row = mysqli_fetch_row($tabela)){
			$bodyTable = $bodyTable."
			<tbody>
			<tr>
				<td>".$row[0]."</td>
				<td>".$row[1]."</td> 
				<td>".$row[3]."</td>
				<td> <a href="."../Controller/controller_ExcluirFuncionario.php?codigo=".$row[1].""."> <button > remover </button><a/> </td>
				<td><a href="."../View/AlterarFuncionario.php?codigo=".$row[1].""."> <button > alterar </button><a/>   </td>
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
	$_SESSION['buscafun']=$table;
	header('Location: ../View/BuscarFuncionario.php');
    exit();
}

?>

