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

       function buscarProduto($Produto,$link){
        $query = "SELECT * FROM `produtos` WHERE `nome` LIKE '".$Produto->getNome()."%'";
        $r = mysqli_query($link, $query);
		if (!$r){
			echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
			echo 'Erro MySQL: ' . mysqli_error();
				exit;
            }
		return $r;

    }

    function removerProduto($id,$link){
        $query = "DELETE FROM `produtos` WHERE `idProdutos` = '".$id."'";
        if(!mysqli_query($link,$query)){
            
            die ("nao foi possivel excluir".mysqli_error($link));
            
        }
    }

        function buscarProdutoFormulario ($id,$link){
            
        $query = "SELECT * FROM `produtos`  WHERE idProdutos = '".$id."'";
		$r = mysqli_query($link, $query);
		return $r;
        }

        function alterarProduto($Produto,$link){ //alterar cliente 
            $query = "UPDATE `produtos` SET `nome`='".$Produto->getNome().
                       "',`preco`='".$Produto->getPreco().
                       "',`descricao`='".$Produto->getDescricao().
                       "',`quantidade`='".$Produto->getQuantidade()."'";
               if(!mysqli_query($link,$query)){
                   
                   return false;
               }
               return true;
        }
        
    }

    
?>