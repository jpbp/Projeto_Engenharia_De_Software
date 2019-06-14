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
}
?>