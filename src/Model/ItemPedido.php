<?php
class ItemPedido{ 

private $idPedido;
private $idProduto;
private $qtde;

    public function ItemPedido($idPedidov,$idProdutov,$qtdev){
        $this->idPedido=$idPedidov;
        $this->idProduto=$idProdutov;
        $this->qtd=$qtd;
    }

	public function  getIdPedido() {
		return $this->idPedido;
	}

	public function void setIdPedido( idPedido) {
		$this->idPedido = idPedido;
	}

	public function  getIdProduto() {
		return $this->idProduto;
	}

	public function void setIdProduto( idProduto) {
		$this->idProduto = idProduto;
	}

	public function  getQtde() {
		return $this->qtde;
	}

	public function void setQtde( qtde) {
		$this->qtde = qtde;
	}


}

?>