<?php
session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
//include("verificalogin.php");
include("../Model/Produto.php");
include("../Persistence/Conection.php");
include("../Persistence/ProdutoDao.php");
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$qtd = $_POST["quantidade"];
$descricao=$_POST["descricao"];


//instanciando produto
$p1= new Produto($nome,$preco,$qtd,$descricao);

//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

//
$produtoDAO = new ProdutoDao();

if($produtoDAO->cadastrarProduto($p1,$con->getLink())){
    $_SESSION['produto']=true; //caso verdadeiro ele vai cadastarr o cliente no banco
    header('Location: ../View/CadastrarProduto.php'); // volta para pagina de cadastro
    exit();  
}
else{
    $_SESSION['produto']=false; // se não ele cancela
    header('Location: ../View/CadastrarProduto.php'); //volta para pagina cadastro
    exit(); 

}


?>