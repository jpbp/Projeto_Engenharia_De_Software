<?php
session_start();
include("../Model/Pedido.php");
include("../Persistence/Conection.php");
include("../Persistence/PedidoDao.php");

$id = $_GET["codigo"];
$_SESSION['id']=$id;


$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$PedidoDAO = new PedidoDao();
$aux=$PedidoDAO-> buscarPedido($id,$con->getLink());
while($row = mysqli_fetch_row($aux)){
    $cep=$row[6];
    $logradouro=$row[7];
   
    $cidade=$row[9];
    $numero=$row[10];
    $estado=$row[11];
    $complemento=$row[12];
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
                                <input type="text" name="numero" class="form-control" id="inputNome" placeholder="Número" required>
                            </fieldset>
                        </div>
                        <div class="form-group col-sm-5" id="cpf">
                            <fieldset disabled>
                                <label for="inputCpf"> Data </label>
                                <input type="date" class="form-control" name="cpf" id="inputCpf" placeholder="CPF" required>
                            </fieldset>

                        </div>
                    </div>

                    <!-- Buscar Bruxo -->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-6">
                        <fieldset disabled>
                            <label> Bruxo </label>
                            <input type="text" class="form-control" name="bruxo" id="inputBruxos" placeholder="Bruxo" required>
                        </fieldset>
                        </div>

                        <div class="form-group col-sm-5">
                            <fieldset disabled>
                                <label for="inputCpf"> CPF </label>
                                <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="CPF" required>
                            </fieldset>
                        </div>
                    </div>

                    <!-- Buscar Produto-->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-6">
                        <fieldset disabled>
                            <label> Artigos Mágicos </label>
                            <input type="text" class="form-control" name="artigosMagicos" id="inputArtigosMagicos" placeholder="Artigos Mágicos" required>
                        </fieldset>
                        </div>
                        <div class="form-group col-sm-3">
                            <fieldset disabled>
                                <label for="inputCpf"> Preço </label>
                                <input type="text" class="form-control" name="preco" id="inputPreco" placeholder="Preço" required>
                            </fieldset>
                        </div>
                        <div class="form-group col-sm-3">
                            <fieldset disabled>
                            <label for="inputCpf"> Quantidade</label>
                            <input type="text" class="form-control" name="preco" id="inputPreco" placeholder="Quantidade" required>
                            </fieldset>
                        </div>
                    </div>

                    <!-- Tabela-->
                    <div class="form-row">
                        <table class="table table-hover">
                            <thead>
                                <tr class="bg-warning">
                                    <th scope="col">Artigo Mágico</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Preço Unitário</th>
                                    <th scope="col">Preço Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Vassouras</th>
                                    <td>2</td>
                                    <td>15.00</td>
                                    <td>30.00</td>
                                </tr>
                                <tr>
                                    <th>Balinhas</th>
                                    <td>2</td>
                                    <td>15.00</td>
                                    <td>30.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Vendedor e Preço Total -->
                    <div class="form-row centralizado">
                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="disabledVendedor "> Vendedor </label>
                                <input type="text" class="form-control" name="vendedor" id="disabledVendedor" placeholder="Vendedor" required>
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-2">
                            <fieldset disabled>
                            <label for="inputPreco"> Preço Total</label>
                            <input type="integer" class="form-control" name="precoTotal" id="inputPreco" placeholder="" required>
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

</body>