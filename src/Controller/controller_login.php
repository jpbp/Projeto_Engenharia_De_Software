<?php
session_start();
include_once("../Persistence/Conection.php");
include_once("../Model/Funcionario.php");
include_once("../Persistence/FuncionarioDao.php");

//conexao com o banco
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

//pegar dados do formulario
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


$f1=new Funcionario("","","","","","","","","","","",$usuario,$senha,"");

$Fdao= new FuncionarioDao();
$consulta=$Fdao->verificaLogin($f1,$con->getLink());
if(mysqli_num_rows($consulta)==1){
    $row = mysqli_fetch_row($consulta);
    $_SESSION['usuario']=$row[11];
    $_SESSION['cpfUser']=$row[1];
    header('Location: ../View/index.php');
    exit();
  }
  //se não o usuario ou senha não for valido ele volta pra tela de login  
  else{
    $_SESSION['nao_autenticado']=true;
    header('Location: ../View/login.php');
    exit();
  }
  



//se o usuario e senha forem for validos e achado no bancp ele vai para tela do index


?>