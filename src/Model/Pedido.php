<?php
 class Pedido{
    private $dataPedido;
    private $nomeBruxo;
	private $logradouro;
	private $cidade;
	private $complemento;
	private $numero;
	private $estado;
	private $cep;
    private $cpfFuncionario;
	private $cpfCliente;
	private $preco;
	
    
    public function Pedido($datav,$nomeb,$logradourov,$cidadev,$complementov,$numerov,$estadov,$cepv,$cpfFuncv,$cpfClientev,$precov){
        $this->dataPedido=$datav;
        $this->nomeBruxo=$nomeb;
        
		$this->logradouro=$logradourov;
		$this->cidade=$cidadev;
		$this->complemento=$complementov;
		$this->numero=$numerov;
		$this->estado=$estadov;
		$this->cpfFuncionario=$cpfFuncv;
		$this->cep=$cepv;
		$this->cpfCliente=$cpfClientev;
		$this->preco=$precov;
        
    }
    public function getDataPedido() {
		return $this->dataPedido;
	}
	public function getPreco() {
		return $this->preco;
	}
	public function getCep(){
		return $this->cep;
	}
	public function getNumero(){
		return $this->numero;
	}

	public function getLogradouro(){
		return $this->logradouro;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getEstado(){
		return $this->estado;
	}
	public function getComplemento(){
		return $this->complemento;
	}


	public function  getNomeBruxo() {
		return $this->nomeBruxo;
	}


	
	

	public function  getEndereco() {
		return $this->endereco;
	}

	

	public function  getCpfFun() {
		return $this->cpfFun;
	}

	

	public function  getCpfCliente() {
		return $this->cpfCliente;
	}

	
    



}


?>