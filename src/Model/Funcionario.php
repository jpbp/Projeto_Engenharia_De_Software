<?php
 
class Funcionario {
  //atributos
    private $nome;
    private $residencial;
    private $email;
    private $cpf;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $complemento;
    private $numero;
    private $estado;
    private $cep;
    private $celular;
    private $username;
    private $senha; 
    //construtor da classe
    public function Funcionario($nomev,$cpfv,$celularv,$residencialv,$emailv,$cepv,$logradourov,$bairrov,$cidadev,$numerov,$estadov,$usernamev,$senhav,$complementov){
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
        $this->username=$usernamev;
        $this->senha=$senhav;
    }
    //gets dos atributos
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
    function getUsername(){
        return $this->username;
    }
    function getSenha(){
        return $this->senha;
    }

    
    
} 

?>