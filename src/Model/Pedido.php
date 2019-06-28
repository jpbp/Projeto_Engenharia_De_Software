<?php
 class Pedido{
    private $dataPedido;
    private $nomeBruxo;
	private $nomeproduto;
	private $logradouro;
	private $bairro;
	private $cidade;
	private $complemento;
	private $numero;
	private $estado;
	private $cep;
    private $cpfFuncionario;
	private $cpfCliente;
	
    
    public function Pedido($datav,$nomeb,$nomep,$logradourov,$bairrov,$cidadev,$complementov,$numerov,$estadov,$cepv,$cpfFuncv,$cpfClientev){
        $this->dataPedido=$datav;
        $this->nomeBruxo=$nomeb;
        $this->nomeProduto=$nomep;
		$this->logradouro=$logradourov;
		$this->bairro=$bairrov;
		$this->cidade=$cidadev;
		$this->complemento=$complementov;
		$this->numero=$numerov;
		$this->estado=$estadov;
		$this->cpfFuncionario=$cpfFuncv;
		$this->cep=$cepv;
		$this->cpfCliente=$cpfClientev;
        
    }
    public function getDataPedido() {
		return $this->dataPedido;
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


	public function  getNomeproduto() {
		return $this->nomeproduto;
	}

	

	public function  getEndereco() {
		return $this->endereco;
	}

	public function  setEndereco( $endereco) {
		$this->endereco = endereco;
	}

	public function  getCpfFun() {
		return $this->cpfFun;
	}

	public function  setCpfFun( $cpfFun) {
		$this->cpfFun = cpfFun;
	}

	public function  getCpfCliente() {
		return $this->cpfCliente;
	}

	public function  setCpfCliente( $cpfCliente) {
		$this->cpfCliente = cpfCliente;
	}

    



}


?>