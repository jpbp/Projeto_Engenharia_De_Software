<?php
	session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
	include("verificalogin.php");
	include("verificaCadastro.php")
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Cadastro cliente</title>
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
		</head>
		<body>
			<div align="right">
		<p> <?php echo $_SESSION['usuario'];?> </p>
		<a href="logout.php">Sair</a>
	</div>
			<h3>Cadastrando cliente</h3>
			<p> <?php 
			if(empty($_SESSION['cadastro'])){ // se não existe usuario ele volta pro login
				
			}	
			else{
				echo $_SESSION['cadastro'];
				unset($_SESSION['cadastro']);
			}
 
				 
			?> </p>

		<div>
		  <form method="POST" action="../Controller/controller_CadastrarCliente.php">

		    <label for="nome">Nome</label>
		    <input type="text"  name="nome" placeholder="Your name..">

		    <label for="cpf">CPF</label>
		    <input type="number"  name="cpf" placeholder="Your cpf..">

		    <label for="residencial">Residencial</label>
		    <input type="number"  name="residencial" placeholder="Your residencial">

		    <label for="celular">celular</label>
		    <input type="number"  name="celular" placeholder="Your telefone"><br>

		    <label for="email"> email </label>
		    <input type="text"  name="email" placeholder=" seu email ">
		    
		    <label for="cep">cep </label>
		    <input type="number"  name="cep" placeholder="seu cep "><br>

		    <label for="logradouro ">logradouro</label>
		    <input type="text"  name="logradouro" placeholder="seu logradouro">

		    <label for="bairro "> bairro</label>
		    <input type="text"  name="bairro" placeholder=" seu bairro">

		    <label for="cidade ">cidade </label>
		    <input type="text"  name="cidade" placeholder="sua cidade ">

		    <label for="complemento ">complemento </label>
		    <input type="text"  name="complemento" placeholder=" com..">

		    <label for="numero ">numero </label>
		    <input type="number"  name="numero" placeholder=" "><br>

		   

		    <label for="estado">estado</label>
		    <select id="estadoas" name="estado">
		      <option value="mg">minas gerais</option>
		      <option value="sp">são paulo</option>
		      <option value="rj">rio de janeiro</option>
		    </select>
		  
		    <input type="submit" value="Submit" >
		   

		  </form>
		  
		</div>

		</body>
	</html>
