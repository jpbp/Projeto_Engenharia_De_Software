<?php
session_start();
//importando arquivos que va ser usados
include("../Model/Funcionario.php");
include("../Persistence/Conection.php");
include("../Persistence/FuncionarioDao.php");

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
$user=$_POST["username"];
$senha=$_POST["senha"];
//instancia cliente
$f1= new Funcionario($nome,$cpf,$celular,$residencial,$email,$cep,$logradouro,$bairro,$cidade,$numero,$estado,$user,$senha,$complemento);


//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

//criar objeto dao
$funcionarioDAO = new funcionarioDao();

if($funcionarioDAO->cadastrarfuncionario($f1,$con->getLink()) ){ 
    $_SESSION['cadfun']="cadastrado"; //caso verdadeiro ele vai cadastarr o funcionario no banco
   
    header('Location: ../View/CadastrarFuncionario.php'); // volta para pagina de cadastro
    exit();    
}
else{
    $_SESSION['cadfun']="nao"; // se não ele cancela
    header('Location: ../View/CadastrarFuncionario.php'); //volta para pagina cadastro
    exit(); 
}
?>