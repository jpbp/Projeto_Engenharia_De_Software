<?php
session_start();
include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");


$cpf = $_GET["codigo"];
echo $nome;

$c1= new Cliente("",$cpf,"","","","","","","","","","");

//conexao com banco de dados
$con = new Conection("localhost","root","123","lojahogwarts");
$con->conectar();

	
$clienteDAO = new ClienteDao();
$clienteDAO->excluirCliente($c1,$con->getLink());
	

$_SESSION['excluiu']="<script>alert('Excluido com sucesso!!');</script>";
	header('Location: ../View/BuscarCliente.php');
    exit();
	



?>
