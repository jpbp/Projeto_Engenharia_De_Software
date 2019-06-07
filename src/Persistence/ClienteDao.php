<?php

class ClienteDao{
	public function ClienteDao(){

	}

	 function cadastrar($Cliente,$link){
			 $query = "INSERT INTO `Clientes` (`nome`, `cpf`, `residencial`, `celular`, `email`, `cep`, `logradouro`, `bairro`, `cidade`, `complemento`, `numero`, `estado`) VALUES 
			(".$Cliente->getAtributos().");";
			
			
			$verifica=true;
	
			if(!mysqli_query($link,$query)){
				//die ("nao foi possivel salvar".mysqli_error($link));
				$verifica=false;
				return $verifica;
			}
		
			return $verifica;
		}

	 function buscarCliente($cliente, $link){

	 	$query = "SELECT * FROM `Clientes` WHERE `nome` LIKE '".$cliente->getNome()."%'";
	 	
		$r = mysqli_query($link, $query);
		if (!$r){
			echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
			echo 'Erro MySQL: ' . mysqli_error();
				exit;
			}
		return $r;

	 }

	 function excluirCliente($cliente,$link){

	 	$query = "DELETE FROM `Clientes` WHERE cpf = '".$cliente->getCpf()."'";
	 	echo $query;
			if(!mysqli_query($link,$query)){
				echo "deu ruim";
				die ("nao foi possivel excluir".mysqli_error($link));
			}
			echo "excluido";
			
	 }
	 function alterarCliente($cliente,$link){
	 	$query = "UPDATE `Clientes` SET `nome`='".$cliente->getNome().
					"',`residencial`='".$cliente->getResidencial().
					"',`celular`='".$cliente->getCelular().
					"',`email`='".$cliente->getEmail().
					"',`cep`='".$cliente->getCep().
					"',`logradouro`='".$cliente->getLogradouro().
					"',`bairro`='".$cliente->getBairro().
					"',`cidade`='".$cliente->getCidade().
					"',`complemento`='".$cliente->getComplemento().
					"',`numero`='".$cliente->getNumero().
					"',`estado`='".$cliente->getEstado().
					"' WHERE cpf = '".$cliente->getCpf()."'";
			

			if(!mysqli_query($link,$query)){
				
				return false;
			}
			return true;
	 }
	 	

}

?>