<?php
session_start();
include("../Model/Cliente.php");
include("../Model/Produto.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");
include("../Persistence/ProdutoDao.php");
$c1= new Cliente("","","","","","","","","","","","");
$p1= new Produto("","","","");
$DtSaida=date('d/m/Y');
$data_formatada = DateTime::createFromFormat('d/m/Y', $DtSaida);
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();
$cDAO = new ClienteDao();
$pDAO = new ProdutoDao();
$resultadoC =$cDAO->buscarCliente($c1,$con->getLink());
$resultadoP =$pDAO->buscarProduto($p1,$con->getLink()); 


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="imagens/hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Select2 css-->
    <link rel="stylesheet" href="Select2/Select2.min.css">
    <!-- Bootstrap  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Css interno -->
    <link rel="stylesheet" href="css/pedido1.css">
   
</head>

<body>

    <div class="Titulo">
        <h3>
            Cadastro Pedido
        </h3>
    </div>
    <main class="principal">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form method="post" name="actionJava">
                    
                    <!-- Número Pedido e Cpf -->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-3">

                            <label for="inputNome">Número Pedido</label>
                            <input type="number" name="idPedido"   class="form-control" id="inputNome" placeholder="Número" >

                        </div>
                        <div class="form-group col-sm-5" id="cpf">
                            <label for="inputCpf"> Data </label>
                            
                            <input type="date" class="form-control" maxlength="10" onkeypress="return dateMask(this, event);" id="saida" name="data" value="<?php echo $data_formatada->format('Y-m-d'); ?>"/>
                        </div>
                    </div>
                     <!-- Buscar Produto-->
                     <div class="form-row centralizado">
                        <div class="form-group col-sm-6">
                            <label> Artigos Mágicos </label>


                            <select class="js-example-basic-single form-control" id="combo-produtos" name="produto" onchange = "myFunction()">
                                <option data-preco="0.0">Selecione</option>
                            <?php 
                                 while($row_resultado=mysqli_fetch_assoc($resultadoP)){?>
                             <option  value= "<?php echo $row_resultado['idProdutos'];?>"  data-preco = "<?php echo $row_resultado['preco'];?>"><?php echo $row_resultado['nome'];?></option><?php }?>

                      
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="inputCpf"> Preço</label>
                            <input type="text" class="form-control" name="preco" id="inputPreco" placeholder="Preco" value ="" >
                        </div>
                        
                        <div class="form-group col-sm-3">
                            <label for="inputQuantidade"> Quantidade</label>
                            <input type="text" class="form-control" name="qtd" id="inputQuantidade" placeholder="Quantidade" >
                        </div>
                    </div>

                    <!-- Botão Adicionar na tabela -->
                    <div class="form-row">
                        <div id="botao" class="col-sm-2">
                            <button name ='btn' type="submit" class="btn btn-success" onClick="selecionaAction('../Controller/controller_CadastrarPedido');" >Entrar</button>    
                        </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <?php
                        if($_SESSION['t']!=""){
                        $openTable="<table class='table table-hover'>
                        <thead>
                            <tr>
                                <th>Nome Produto</th>
                                <th>Quantidade</th> 
                                <th>Preço unidade</th>
                                <th>Preço total</th>
                                
                            </tr>
                            </thead>";
                    
                            $closeTable ="</table>";

                           echo $table = "<!DOCTYPE html>
			<html lang=\"pt-br\">

			<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
			<link href='../View/Bootstrap/css/bootstrap.min.css' rel='stylesheet'>
			</header>

			<body>".$openTable.$_SESSION['t'].$closeTable.
				

			"</body>

			</html>";
        }
        else{
            echo "nada";
        }
                    ?>
                
                   
                
                    <!-- Buscar Bruxo -->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-6">
                            <label> Bruxo </label>

                            <select class="js-example-basic-single form-control" id="combo-bruxos" name="bruxo" onchange = "myFunction1()">
                       	        <option>Bruxo</option>
            		            <?php 
              			            while($row_resultado=mysqli_fetch_assoc($resultadoC)){?>
               		 		    <option value= "<?php echo $row_resultado['cpf'];?>" data-bruxo = "<?php echo $row_resultado['cpf'];?>"><?php echo $row_resultado['nome'];?> </option>
			                     <?php }?>
                        </select>

                           

                        </div>

                        <div class="form-group col-sm-5">
                            <fieldset disabled>
                                <label for="inputCpf"> CPF </label>
                                <input type="text"  value= <?php echo $_SESSION['cpfUser'];   ?> class="form-control" name="cpf" id="inputCpf" placeholder="CPF" >
                            </fieldset>
                        </div>
                    </div>
                    
                    <!-- Radio Button-->
                    <div class="form-row btnRadio">
                        <div class="form-check col-sm-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="enderecoCliente" value="enderecoCliente" checked>
                            <label class="form-check-label" for="enderecoCliente">
                                Endereço Cliente
                            </label>
                        </div>
                        <div class="form-check col-sm-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="outroEndereco" value="outroEndereco">
                            <label class="form-check-label" for="outroEndereco">
                                Outro Cliente
                            </label>
                        </div>
                    </div>

                    <div class="enderecoEntrega">
                        <!-- Cep, Logradouro e Número  -->
                        <div class="form-row">
                            <div class="form-group col-sm-4">

                                <label for="inputCep">Cep</label>
                                <input type="number" name="cep" class="form-control" id="inputCep" placeholder="Cep" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-8">
                                <label for="inputLogradouro"> Logradouro </label>
                                <input type="text" class="form-control" name="logradouro" id="inputLogradouro" placeholder="Logradouro" >
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="inputNumero"> Número </label>
                                <input type="number" class="form-control" name="numero" id="inputNumero" placeholder="Número" >
                            </div>
                        </div>

                        <!-- Cidade, Estado e Complemento  -->
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="inputCidade" placeholder="Cidade" >
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="inputEstado"> Estado </label>
                                <input type="text" class="form-control" name="estado" id="inputEstado" placeholder="Estado" >
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="inputComplemento"> Complemento </label>
                                <input type="text" class="form-control" name="complemento" id="inputComplemento" placeholder="Complemento" >
                            </div>
                        </div>
                    </div>
                   
                  
                    <!-- Vendedor e Preço Total -->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="disabledVendedor "> Vendedor </label>
                                <input type="text" value="<?php echo $_SESSION["usuario"] ?>" class="form-control" name="vendedor" id="disabledVendedor" placeholder="Vendedor" >
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="inputPreco"> Preço Total</label>
                            <input type="integer" class="form-control" value="<?php echo $_SESSION["precoTotal"] ?>" name="precoTotal" id="inputPreco" placeholder="" >
                        </div>
                    </div>

                        <div class="form-row">
                            <div id="botao1" class="col-sm-2">
                                <button name="btn1" type="submit" class="btn btn-success" onClick="selecionaAction('../Controller/controller_CadastrarPedidoProduto');"  >Cadastrar</button>
                            </div>
                        </div>
                    
                </form>
            </div>
        </div>
    </main>
    <!-- Icones decorativos-->
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>

    <!-- Select2-->
    <script src="jquery/jquery.min.js"></script>
    <script src="Select2/Select2.min.js"></script>

    <!-- Jquery -->
    <script src="jquery/pedido.js"></script>

    <script>
    function myFunction() {
        var select = document.getElementById("combo-produtos");
        var option = document.querySelector("#combo-produtos>option[value='" + select.value + "'")
        document.getElementById("inputPreco").value = option.dataset.preco;
    }
    </script>
    <script>
    function myFunction1() {
        var select = document.getElementById("combo-bruxos");
        var option = document.querySelector("#combo-bruxos>option[value='" + select.value + "'")
        document.getElementById("inputCpf").value = option.dataset.bruxo;
    }

    
  
</script>
  <script>
  function selecionaAction(script){
        document.actionJava.action = script + '.php';
        document.actionJava.submit();
    }
    </script>

   
    

</body>
</html>