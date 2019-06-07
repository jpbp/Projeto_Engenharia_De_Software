<?php
 
class Cliente {
  
    private $nome;
    private $cpf;
    private $residencial;
    private $celular;
    private $email;
    private $cep;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $complemento;
    private $numero;
    private $estado;

    public function Cliente($nomev,$cpfv,$residencialv,$celularv,$emailv,$cepv,$logradourov,$bairrov,$cidadev,$complementov,$numerov,$estadov){
    	$this->nome=$nomev;
    	$this->cpf=$cpfv;
    	$this->residencial=$residencialv;
    	$this->celular=$celularv;
    	$this->email=$emailv;
    	$this->cep=$cepv;
    	$this->logradouro=$logradourov;
    	$this->bairro=$bairrov;
    	$this->cidade=$cidadev;
    	$this->complemento=$complementov;
    	$this->numero=$numerov;
    	$this->estado=$estadov;
    }

    function getNome(){
        return $this->nome;
    }

    function getCpf(){
        return $this->cpf;
    }

    function getResidencial(){
        return $this->residencial;
    }

    function getCelular(){
        return $this->celular;
    }

    function getEmail(){
        return $this->email;
    }

    function getCep(){
        return $this->cep;
    }

    function getLogradouro(){
        return $this->logradouro;
    }

    function getCidade(){
        return $this->cidade;
    }

    function getBairro(){
        return $this->bairro;
    }

    function getComplemento(){
        return $this->complemento;
    }

    function getNumero(){
        return $this->numero;
    }

    function getEstado(){
        return $this->estado;
    }
    
    public function imprimir(){
    	return $this->nome." , ".$this->cpf;  
    } 
    public function getAtributos(){
        return "'".$this->nome."'".","."'".$this->cpf."'".","."'".$this->residencial."'".","."'".$this->celular."'".","."'".$this->email."'".","."'".$this->cep."'".","."'".$this->logradouro."'".","."'".$this->bairro."'".","."'".$this->cidade."'"." ,"."'".$this->complemento."'".","."'".$this->numero."'".","."'".$this->estado."'";
    } 
} 

?>