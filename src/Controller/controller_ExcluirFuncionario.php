<?php
session_start();
include("../Model/Funcionario.php");
include("../Persistence/Conection.php");
include("../Persistence/FuncionarioDao.php");


$cpf = $_GET["codigo"];

$f1= new Funcionario("",$cpf,"","","","","","","","","","","","");

//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

	
$FuncionarioDAO = new FuncionarioDao();
$FuncionarioDAO->excluirFuncionario($f1,$con->getLink());
	

$_SESSION['excluiufun']="<script>alert('Excluido com sucesso!!');</script>";
header('Location: ../View/BuscarFuncionario.php');
exit();
	



?>
