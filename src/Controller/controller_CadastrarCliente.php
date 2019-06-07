<?php
session_start();
include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");

//pegar dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
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
//instancia cliente
$c1= new Cliente($nome,$cpf,$residencial,$celular,$email,$cep,$logradouro,$bairro,$cidade,$complemento,$numero,$estado);


//conexao com banco de dados
$con = new Conection("localhost","root","123","lojahogwarts");
$con->conectar();


$clienteDAO = new ClienteDao();
if($clienteDAO->cadastrar($c1,$con->getLink())){
    $_SESSION['cadastro']="<script>alert('Cliente Cadastrado com sucesso!');</script>";
  	header('Location: ../View/CadastrarCliente.php');
    exit();
}
else{
	$_SESSION['cadastro']="<script>alert('Não foi possivel cadastrar o cliente');</script>";
  	header('Location: ../View/CadastrarCliente.php');
    exit();
	
}
?>