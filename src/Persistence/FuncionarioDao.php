<?php

class FuncionarioDao{
	public function FuncionarioDao(){ //construtor da classe

    }

	function verificaLogin($Funcionario,$link){ //busca o cliente no mando de dados atravas do cpf
        $query= "SELECT * FROM `Funcionarios` WHERE `username` = '".$Funcionario->getUsername()."' and `senha` = '".$Funcionario->getSenha()."' " ; 
		$r = mysqli_query($link, $query);
		return $r;
	}
}
?>