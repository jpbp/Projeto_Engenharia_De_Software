<?php
session_start();
include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");

$cpf = $_SESSION['cpf']; //cpf vindo da sessao
$nome = $_POST["nome"];
$residencial = $_POST["residencial"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$logradouro = $_POST["logradouro"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$complemento = $_POST["complemento"];
$numero = $_POST["numero"];
$estado = $_POST["estado"];
echo $cpf;
$c1= new Cliente($nome,$cpf,$residencial,$celular,$email,$cep,$logradouro,$bairro,$cidade,$complemento,$numero,$estado);

$con = new Conection("localhost","root","123","lojahogwarts");
$con->conectar();

$cDAO = new ClienteDao();

$dado= $cDAO->AlterarCliente($c1,$con->getLink());

if($dado){
	$_SESSION['alterado']="<script>alert('Cliente alterado com sucesso!');</script>";
	header('Location: ../View/BuscarCliente.php');
    exit();
}else{
	$_SESSION['alterado']="<script>alert('Não foi ṕossivel alterar o cliente');</script>";
	header('Location: ../View/BuscarCliente.php');
    exit();

}



?>