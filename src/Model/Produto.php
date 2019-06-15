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

	public private get$Nome() {
		return this.$nome;
	}

	public void set$Nome(private $nome) {
		this.$nome = $nome;
	}

	public private get$Preco() {
		return this.$preco;
	}

	public void set$Preco(private $preco) {
		this.$preco = $preco;
	}

	public private get$Quantidade() {
		return this.$quantidade;
	}

	public void set$Quantidade(private $quantidade) {
		this.$quantidade = $quantidade;
	}

	public private get$Descricao() {
		return this.$descricao;
	}

	public void set$Descricao(private $descricao) {
		this.$descricao = $descricao;
	}

	public Object get() {
		return this.;
	}

	

   


    public function getAtributos(){ //retona os atributos para consula do banco de dados
      return "'null'".","."'".$this->nome."'".","."'".$this->preco."'".","."'".$this->descricao."'".","."'".$this->quantidade."'";
  }
}
?>