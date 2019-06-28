<?php

class pedidoDao{
    public function pedidoDao(){ //construtor da classe
    }
       function buscarPedido($numPedido,$link){
        if(empty($numPedido)){
            $numPedido=-1;
        }
        $query = "SELECT * FROM `pedidos`  WHERE `idPedido` = ". $numPedido ." ";
		$r = mysqli_query($link, $query);
        
		if (!$r){
			echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
			echo 'Erro MySQL: ' . mysqli_error();
				exit;
            }
		return $r;

    }

    function removerPedido($id,$link){
        $query = "DELETE FROM `pedidos` WHERE `idPedido` = '".$id."'";
        if(!mysqli_query($link,$query)){
            
            die ("nao foi possivel excluir".mysqli_error($link));
            
        }



    }

    function alterarPedido($pedido,$link){
        $query = "UPDATE `pedidos` SET `cep`='".$pedido->getCep().
                       "',`logradouro`='".$pedido->getLogradouro().
                       "',`cidade`='".$pedido->getCidade().
                       "',`numero`='".$pedido->getNumero().
                       "',`estado`='".$pedido->getEstado().
                       "',`complemento`='".$pedido->getComplemento()."'";
               if(!mysqli_query($link,$query)){
                   
                   return false;
               }
               return true;
    }

    
        
    }

    
?>