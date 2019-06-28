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
        echo "deu bom";
    }
    public  getDataPedido() {
		return $this->dataPedido;
	}

	public  setDataPedido( dataPedido) {
		$this->dataPedido = dataPedido;
	}

	public  getNomeBruxo() {
		return $this->nomeBruxo;
	}

	public  setNomeBruxo( nomeBruxo) {
		$this->nomeBruxo = nomeBruxo;
	}

	public  getNomeproduto() {
		return $this->nomeproduto;
	}

	public  setNomeproduto( nomeproduto) {
		$this->nomeproduto = nomeproduto;
	}

	public  getEndereco() {
		return $this->endereco;
	}

	public  setEndereco( endereco) {
		$this->endereco = endereco;
	}

	public  getCpfFun() {
		return $this->cpfFun;
	}

	public  setCpfFun( cpfFun) {
		$this->cpfFun = cpfFun;
	}

	public  getCpfCliente() {
		return $this->cpfCliente;
	}

	public  setCpfCliente( cpfCliente) {
		$this->cpfCliente = cpfCliente;
	}

    



}


?>