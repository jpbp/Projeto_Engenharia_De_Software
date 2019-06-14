<?php

class ProdutoDao{
    public function ProdutoDao(){ //construtor da classe
    }
        function cadastrarProduto($Produto,$link){ //cadasrtar Produto no banco de dados
            $query = "INSERT INTO `produtos` (`idProdutos`, `nome`, `preco`, `Descricao`,`quantidade`) VALUES 
           (".$Produto->getAtributos().");";
           
           
           $verifica=true;
   
           if(!mysqli_query($link,$query)){
               //die ("nao foi possivel salvar".mysqli_error($link));
               $verifica=false;
               return $verifica;
           }
          
           return $verifica;
       }



    }

    
?>