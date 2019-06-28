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
    <link rel="stylesheet" href="css/relatorio.css">

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<body>

    <div class="Titulo">
        <h3>
            Relatório
        </h3>
    </div>
    <main id="principal">
        <div class="form-row centralizado">
            <h3>
                Relatório de Vendas
            </h3>
            <div class="imagem">
                Hogwarts Store
                <img src="imagens/hogwarts.png" alt="lojaHogwarts">
            </div>
        </div>
        <div id="vendedor">
            Vendedor: Álvaro Dumbledore
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <table class="table testeTabela">

                    <thead>
                        <tr>
                            <th scope="col">Número Pedido</th>
                            <th scope="col">Bruxo</th>
                            <th scope="col">Data</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <!-- Select2-->
    <script src="jquery/jspdf.min.js"></script>
    <script src="Select2/Select2.min.js"></script>
    
</body>

</html>