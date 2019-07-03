<?php
session_start();
include("../Model/Pedido.php");
include("../Persistence/Conection.php");
include("../Persistence/PedidoDao.php");
include("../Persistence/ProdutoDao.php");
include("../Model/Produto.php");

$id = $_GET["codigo"];
$_SESSION['id']=$id;

$_SESSION['idP']=$_GET["prod"];
$DtSaida=date('d/m/Y');
$data_formatada = DateTime::createFromFormat('d/m/Y', $DtSaida);
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();
$p1= new Produto("","","","");
$PedidoDAO = new PedidoDao();
$pDAO = new ProdutoDao();
$aux=$PedidoDAO-> buscarPedido($id,$con->getLink());
$resultadoP =$pDAO->buscarProduto($p1,$con->getLink()); 
while($row = mysqli_fetch_row($aux)){
    $cep=$row[5];
    $logradouro=$row[6];
    
    $cidade=$row[7];
    $numero=$row[8];
    $estado=$row[9];
    $complemento=$row[10];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alterar Pedido</title>
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
            Alterar Pedido
        </h3>
    </div>
    <main class="principal">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form method="POST" action="../Controller/controller_AlterarPedido.php">

                    <!-- Número Pedido e Cpf -->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-3">
                            <fieldset disabled>
                                <label for="inputNome">Número Pedido</label>
                                <input type="text" value=<?php echo $id; ?> name="numero" class="form-control" id="inputNome" placeholder="Número" required>
                            </fieldset>
                        </div>
                        <div class="form-group col-sm-5" id="cpf">
                            <label for="inputCpf"> Data </label>
                            
                            <input type="date" class="form-control" maxlength="10" onkeypress="return dateMask(this, event);" id="saida" name="data" value="<?php echo $data_formatada->format('Y-m-d'); ?>"/>
                        </div>
                    </div>

                    <!-- Buscar Bruxo -->
                    <div class="form-row centralizado">
                       

                        
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
                            
                            <label for="inputCpf"> Quantidade</label>
                            <input type="text" class="form-control" name="qtd" id="inputPreco" placeholder="Quantidade" required>
                            
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

                        
                    </div>

                    

                    <div class="enderecoEntrega">
                        <!-- Cep, Logradouro e Número  -->
                        <div class="form-row">
                            <div class="form-group col-sm-4">

                                <label for="inputCep">Cep</label>
                                <input type="text" value = <?php echo $cep;  ?> name="cep" class="form-control" id="inputCep" placeholder="Cep" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-8">
                                <label for="inputLogradouro"> Logradouro </label>
                                <input type="text"  value = <?php echo $logradouro;  ?> class="form-control" name="logradouro" id="inputLogradouro" placeholder="Logradouro" required>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="inputNumero"> Número </label>
                                <input type="text" value = <?php echo $numero;  ?> class="form-control" name="numero" id="inputNumero" placeholder="Número" required>
                            </div>
                        </div>

                        <!-- Cidade, Estado e Complemento  -->
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" value = <?php echo $cidade;  ?> name="cidade" class="form-control" id="inputCidade" placeholder="Cidade" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="inputEstado"> Estado </label>
                                <input type="text" value = <?php echo $estado; ?> class="form-control" name="estado" id="inputEstado" placeholder="Estado" required>
                            </div>
                            <div class="form-group col-sm-3"> 
                                <label for="inputComplemento"> Complemento </label>
                                <input  type="text" value = <?php if(empty($complemento)){ echo "nada";} else echo $complemento;  ?> class="form-control" name="complemento" id="inputComplemento" placeholder="Complemento" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div id="botao1" class="col-sm-2">
                            <button type="submit" class="btn btn-success">Alterar</button>
                        </div>
                    </div>
            </div>
            <!-- </form> -->
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