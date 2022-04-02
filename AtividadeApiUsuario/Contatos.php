<?php

$user_name = "etecia";
$password = "123456";
$host = "localhost";
$db_name = "dbContatos";


$con = mysqli_connect($host,$user_name,$password,$db_name);

$get = "select * from tbContatos;";

$result = mysqli_query($con,$get);

while($row = mysqli_fetch_array($result)){
    array_push($response, array("Nome"=>$row["nome"],"Email"=>$row["email"]));
}
    echo json_encode($response);


/*_________________________________________________________________________________*/
	function isTheseParametersAvailable($params){
	
		$available = true; 
		$missingparams = ""; 
		
		foreach($params as $param){
			if(!isset($_POST[$param]) || strlen($_POST[$param])<=0){
				$available = false; 
				$missingparams = $missingparams . ", " . $param; 
			}
		}
		
		
		if(!$available){
			$response = array(); 
			$response['error'] = true; 
			$response['message'] = 'Parameters ' . substr($missingparams, 1, strlen($missingparams)) . ' missing';
			
		
			echo json_encode($response);
			
		
			die();
		}
	}
	
$response = array();


if(isset($_POST))
			{
				isTheseParametersAvailable(array('nome','email'));
				
				$db = new DbOperation();
				
				$result = $db->createuser($_POST['nome'], $_POST['email']);
            }
            if($result){
					
                $response['error'] = false; 

                
                $response['message'] = 'Usuario adicionado com sucesso';

                
                $response['heroes'] = $db->getusuario();
            }else{

                
                $response['error'] = true; 

            
                $response['message'] = 'Algum erro ocorreu por favor tente novamente';
            }
        
    



?>