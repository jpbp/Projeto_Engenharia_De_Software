<?php
session_start();
//importando arquivos que va ser usados
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
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

//criar objeto dao
$clienteDAO = new ClienteDao();
if($clienteDAO->cadastrarCliente($c1,$con->getLink()) ){ 
    $_SESSION['cadastrou']=true; //caso verdadeiro ele vai cadastarr o cliente no banco
    header('Location: ../View/CadastrarCliente.php'); // volta para pagina de cadastro
    exit();    
}
else{
    $_SESSION['cadastrou']=false; // se não ele cancela
    header('Location: ../View/CadastrarCliente.php'); //volta para pagina cadastro
    exit(); 
}
?>