<?php
 
class DbOperation
{
    private $con;
 
 
    function __construct()
    {
  
        require_once dirname(__FILE__) . '/DbConnect.php';
 
     
        $db = new DbConnect();
 

        $this->con = $db->connect();
    }
    
	$db = DbConnect();
	
	function createHero($nome, $email){
		$stmt = $this->con->prepare("INSERT INTO tbContatos (nome, email) VALUES (?, ?)");
		$stmt->bind_param("ss", $nome, $email);
		if($stmt->execute())
			return true; 			
		return false;
	}
}