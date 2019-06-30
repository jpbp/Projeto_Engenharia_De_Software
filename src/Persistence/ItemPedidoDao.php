<?php

class ItemPedidoDao{
    public function ItemPedidoDao(){ //construtor da classe
    }
       function buscarPedido($numPedido,$link){
        $query = "SELECT * FROM `item_pedido`  WHERE `idPedido` = '".$numPedido."'";
		$r = mysqli_query($link, $query);

		if (!$r){
			echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
			echo 'Erro MySQL: ' . mysqli_error();
				exit;
            }
		return $r;

    }

    function removerItemPedido($id,$link){
        if(empty($id)){
            $id=-1;
        }
        $query = "DELETE FROM `item_pedido` WHERE `idPedido` = ".$id."";
        echo $query;
        if(!mysqli_query($link,$query)){
            
            die ("nao foi possivel excluir".mysqli_error($link));
            
        }
    }

        function adicionarItem($ItemPedido,$link){
            $query="INSERT INTO `item_pedido` VALUES ('%d', '%d', '%d','%s','%d')";
            $query = sprintf($query,$ItemPedido->getIdPedido(),$ItemPedido->getIdProduto(),$ItemPedido->getQtde(),$ItemPedido->getNome(),$ItemPedido->getPreco());
         
            if(!mysqli_query($link,$query)){
                die ("nao foi possivel salvar".mysqli_error($link));
               
            }
        
          
        
    }

    
        
    }

    
?>