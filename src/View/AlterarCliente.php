<?php
session_start();
$cpf = $_GET["codigo"];

$_SESSION['cpf']=$cpf;
?>
<!DOCTYPE html>
<html>
<head>
	<title>alterar</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div>
		  <form method="POST" action="../Controller/controller_AlterarCliente.php">

		    <label for="nome">Nome</label>
		    <input type="text"  name="nome" placeholder="Your name..">

		  

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

</body>
</html>