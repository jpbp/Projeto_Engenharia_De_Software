<?php
 
class Produto {
  //atributos
    private $nome;
    private $preco;
    private $quantidade;
    private $descricao;
    
    public function Produto($nomev,$precov,$quantidadev,$descricaov){
      $this->nome=$nomev;
      $this->preco=$precov;
      $this->quantidade=$quantidadev;
      $this->descricao=$descricaov;      
  }

	 public function  getNome() {
		return $this->nome ;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	 public function  getPreco() {
		return $this->preco ;
	}

	public function setPreco($preco) {
		$this->preco = $preco;
	}

	 public function  getQuantidade() {
		return $this->quantidade ;
	}

	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}

	 public function  getDescricao() {
		return $this->descricao ;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}


}
?>