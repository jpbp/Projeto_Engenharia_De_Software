<?php
    session_start();
    include("../Model/Produto.php");
    include("../Persistence/Conection.php");
    include("../Persistence/ProdutoDao.php");




    $idNum=$_POST["numero"];
    $data=$_POST["data"];
    $nomeBruxo=$_POST["bruxo"];
    $cpfBruxo=$_POST["cpf"];
    $cpfUser=$_POST["cpfUser"];
    $idproduto=$_POST["produto"];
    $qtd=$_POST["qtd"];
    $vendendor=$_POST["vendendor"];
    echo $idNum,$data,$nomeBruxo,$cpfBruxo,$cpfUser,$produto,$qtd,$vendendor;
    

}
    
?>