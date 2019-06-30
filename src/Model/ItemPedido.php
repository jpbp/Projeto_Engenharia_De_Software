<?php
class ItemPedido{ 

private $idPedido;
private $idProduto;
private $qtde;
private $nomeProduto;
private $preco;

    public function ItemPedido($idPedidov,$idProdutov,$qtdev,$nome,$precov){
        $this->idPedido=$idPedidov;
        $this->idProduto=$idProdutov;
		$this->qtde=$qtdev;
		$this->nomeProduto=$nome;
		$this->preco=$precov;
    }

	public function  getIdPedido() {
		return $this->idPedido;
	}
	public function  getNome() {
		return $this->nomeProduto;
	}
	public function  getPreco() {
		return $this->preco;
	}

	

	public function  getIdProduto() {
		return $this->idProduto;
	}

	

	public function  getQtde() {
		return $this->qtde;
	}

	


}

?>