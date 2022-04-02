<?php 

	class DbConnect
	{
		
		private $con;
	 
		//construtor da classe
		function __construct()
		{
	 
		}
	 
	
		function connect()
		{
		
			include_once dirname(__FILE__) . '/Contatos.php';
	 
			
			$this->con = new mysqli($host,$user_name,$password,$db_name);
	 
		
			if (mysqli_connect_errno()) {
				echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
			}
	 
			 
			return $this->con;
		}
	 
	}