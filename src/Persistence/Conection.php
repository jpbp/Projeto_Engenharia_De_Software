<?php

	class Conection{
		var $server, $user, $pwd, $bd, $link;
		

		function __construct($serverv, $userv, $pwdv, $bdv){
			$this->server = $serverv;
			$this->user = $userv;
			$this->pwd = $pwdv;
			$this->bd = $bdv;
		}
		
		function conectar(){
			$this->link = mysqli_connect($this->server, $this->user, 
										$this->pwd, $this->bd);
			if (!$this->link){
				die ("nao foi possivel conectar".mysqli_error());
			} 
			
		}

		function getLink(){
			return $this->link;
		}
	}

?>