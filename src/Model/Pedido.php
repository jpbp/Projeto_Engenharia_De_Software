<?php
 class Pedido{
    private $dataPedido;
    private $nomeBruxo;
    private $nomeproduto;
    private $endereco;
    private $cpfFun;
    private $cpfCliente;
    
    public function Pedido($datav,$nomeb,$nomep,$enderecov,$cpfFunv,$cpfClientev){
        $this->dataPedido=$datav;
        $this->nomeBruxo=$nomeb;
        $this->nomeProduto=$nomep;
        $this->endereco=$enderecov;
        $this->cpfFun=$cpfFunv;
        $this->cpfCliente=$cpfClientev;
        
    }
    public function getDataPedido() {
		return $this->dataPedido;
	}

	public function  setDataPedido( $dataPedido) {
		$this->dataPedido = dataPedido;
	}

	public function  getNomeBruxo() {
		return $this->nomeBruxo;
	}

	public function  setNomeBruxo( $nomeBruxo) {
		$this->nomeBruxo = nomeBruxo;
	}

	public function  getNomeproduto() {
		return $this->nomeproduto;
	}

	public function  setNomeproduto( $nomeproduto) {
		$this->nomeproduto = nomeproduto;
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