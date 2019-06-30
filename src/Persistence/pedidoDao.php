<?php

class pedidoDao{
    public function pedidoDao(){ //construtor da classe
    }
       function buscarPedido($numPedido,$link){
        if(empty($numPedido)){
            $numPedido=-1;
        }
        $query = "SELECT * FROM `pedidos` as p , `item_pedido` as i WHERE p.idPedido = ". $numPedido ." AND   i.idPedido = ". $numPedido ."";
        
        $r = mysqli_query($link, $query);
        
		if (!$r){
			echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";

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
    function cadastrarPedido($id,$data,$nomeBruxo,$log,$cidade,$com,$num,$estado,$cep,$cpfFun,$cpfCliente , $preTotal,$link){ //cadasrtar cliente no banco de dados
        $query = "INSERT INTO `pedidos` VALUES ('%d', '%s', '%s', '%d', '%d', '%d', '%s','%s','%d','%s','%s','%d')";
        $query = sprintf($query, $id,$data,$nomeBruxo,$cpfFun,$cpfCliente,$cep,$log,$cidade,$num,$estado,$com,$preTotal);
       

        if(!mysqli_query($link,$query)){
            
            die ("nao foi possivel excluir".mysqli_error($link));
            
        }
         
       
   }

    
        
    }

    
?>