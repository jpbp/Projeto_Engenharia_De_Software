<?php
session_start();
include("../Model/Funcionario.php");
include("../Persistence/Conection.php");
include("../Persistence/FuncionarioDao.php");

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
$senha=$_POST["senha"];
$username=$_POST["username"];

$f1= new Funcionario($nome,$cpf,$celular,$residencial,$email,$cep,$logradouro,$bairro,$cidade,$numero,$estado,$user,$senha,$complemento);

$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$fDao = new FuncionarioDao();

$dado= $fDao->AlterarFuncionario($f1,$con->getLink());

if($dado){
	$_SESSION['alteradofun']="<script>alert('Funcionario alterado com sucesso!');</script>";
	header('Location: ../View/BuscarFuncionario.php');
    exit();
}else{
	$_SESSION['alteradofun']="<script>alert('Não foi ṕossivel alterar o Funcionario');</script>";
	header('Location: ../View/BuscarFuncionario.php');
    exit();

}



?>