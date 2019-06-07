<?php
session_start();
include_once("../Persistence/Conection.php");

//conexao com o banco
$con = new Conection("localhost","root","123","lojahogwarts");
$con->conectar();


//pegar dados do formulario
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if(empty($usuario) || empty($senha)){
  $_SESSION['nao_autenticado']=true;
  header('Location: ../View/login.php'); //se o usuario ou senha não for valido ele volta pra tela de login  
  exit();
}

$query= "SELECT * FROM Funcionarios WHERE username = '".$usuario."' and senha = '".$senha."' " ; // busca no banco o usuario e senha


$consulta=mysqli_query($con->getLink(),$query);

//se o usuario e senha forem for validos e achado no bancp ele vai para tela do index
if(mysqli_num_rows($consulta)==1){
  $_SESSION['usuario']=$usuario;
  header('Location: ../View/index.php');
  exit();
}
//se não o usuario ou senha não for valido ele volta pra tela de login  
else{
  $_SESSION['nao_autenticado']=true;
  header('Location: controller_login.php');
  exit();
}

?>