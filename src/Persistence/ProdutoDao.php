<?php

class ProdutoDao{
    public function ProdutoDao(){ //construtor da classe
    }
        function cadastrarProduto($Produto,$link){ //cadasrtar Produto no banco de dados
            $query = "INSERT INTO `produtos` (`idProdutos`, `nome`, `preco`, `Descricao`,`quantidade`) 
            VALUES  ('%s', '%s', '%d', '%s','%s')";

            $query=sprintf($query,"null",$Produto->getNome(),$Produto->getPreco(),$Produto->getDescricao(),$Produto->getQuantidade());
           echo $query;
           
           $verifica=true;
   
           if(!mysqli_query($link,$query)){
               die ("nao foi possivel salvar".mysqli_error($link));
               $verifica=false;
               return $verifica;
           }
          
           return $verifica;
       }



    }

    
?>