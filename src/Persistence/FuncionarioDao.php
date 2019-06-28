<?php

class FuncionarioDao{
	public function FuncionarioDao(){ //construtor da classe

    }

	function verificaLogin($Funcionario,$link){ //busca o Funcionario no mando de dados atravas do cpf
        $query= "SELECT * FROM `Funcionarios` WHERE `username` = '".$Funcionario->getUsername()."' and `senha` = '".$Funcionario->getSenha()."' " ; 
		$r = mysqli_query($link, $query);
		return $r;
	}
	function verificaGerente($cpf,$link){
		$query= "SELECT * FROM `gerentes` WHERE  `cpf` = '".$cpf."' " ;
		$r = mysqli_query($link, $query);
		if(mysqli_num_rows($r)==1){
			return true;
		}
		else{
			return false;
		}
	}
	function cadastrarfuncionario($Funcionario,$link){
		$query = "INSERT INTO `Funcionarios` VALUES ('%s', '%d', '%d', '%d', '%s', '%d', '%s','%s','%s','%d','%s','%s','%s','%s')";
	
	$query = sprintf($query, $Funcionario->getNome(),$Funcionario->getCpf(),$Funcionario->getCelular(),$Funcionario->getResidencial(),
	$Funcionario->getEmail(),$Funcionario->getCep(),$Funcionario->getLogradouro(),$Funcionario->getBairro(),$Funcionario->getCidade(),
	$Funcionario->getNumero(),$Funcionario->getEstado(),$Funcionario->getUsername(),$Funcionario->getComplemento(),
	$Funcionario->getSenha());
	$verifica=true;
	if(!mysqli_query($link,$query)){
		//die ("nao foi possivel salvar".mysqli_error($link));
		$verifica=false;
		return $verifica;
	}

	return $verifica;
}

	function buscarFuncionario($Funcionario,$link){
		$query = "SELECT * FROM `funcionarios` WHERE `nome` LIKE '".$Funcionario->getNome()."%'";
	 	
		$r = mysqli_query($link, $query);
		if (!$r){
			echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
			echo 'Erro MySQL: ' . mysqli_error();
				exit;
			}
		return $r;

	}

	function excluirFuncionario($Funcionario,$link){
		$query = "DELETE FROM `funcionarios` WHERE cpf = '".$Funcionario->getCpf()."'";
	 	echo $query;
			if(!mysqli_query($link,$query)){
				echo "deu ruim";
				die ("nao foi possivel excluir".mysqli_error($link));
			}
			echo "excluido";
	}

	function buscarFuncionarioFormulario($Funcionario,$link){
		$query = "SELECT * FROM `Funcionarios`  WHERE cpf = '".$Funcionario->getCpf()."'";
		$r = mysqli_query($link, $query);
		return $r;
	}

	function AlterarFuncionario($Funcionario,$link){
		$query = "UPDATE `Funcionarios` SET `nome`='".$Funcionario->getNome().
					"',`celular`='".$Funcionario->getCelular().
					"',`residencial`='".$Funcionario->getResidencial().
					"',`email`='".$Funcionario->getEmail().
					"',`cep`='".$Funcionario->getCep().
					"',`logradouro`='".$Funcionario->getLogradouro().
					"',`bairro`='".$Funcionario->getBairro().
					"',`cidade`='".$Funcionario->getCidade().
					"',`numero`='".$Funcionario->getNumero().
					"',`cidade`='".$Funcionario->getCidade().
					"',`estado`='".$Funcionario->getEstado().
					"',`username`='".$Funcionario->getUsername().
					"',`complemento`='".$Funcionario->getComplemento().
					"',`senha`='".$Funcionario->getSenha().
					"' WHERE cpf = '".$Funcionario->getCpf()."'";
			

			if(!mysqli_query($link,$query)){
				
				return false;
			}
			return true;

	}

}
?>