<?php
	session_start();
	ob_start();

	include("../classes/teller.php");
	$obj = new teller();
	
	if(isset($_REQUEST['username'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		$row = $obj->get_teller($username);
		
		if($row == null){
			echo "<p id = 'error'>You do not have an account.</p>";
			exit();
		}
		
		if (strcmp($row['password'],$password) != 0){
			echo "<p id = 'error'>Username or password incorrect.</p>";
			exit();
		}
		else {
			//set session variables
					$_SESSION["user"] = $username;
			echo "http://cs.ashesi.edu.gh/~csashesi/class2016/obed-nsiah/mobileweb/pos/desktop/inventory.html";
			//redirect_to index.ph
					//header("Location: http://cs.ashesi.edu.gh/~csashesi/class2016/obed-nsiah/mobileweb/pos/desktop/inventory.html");
				//	exit;
		}
		
		//$obj->closeLink
		ob_end_flush();
	}	
?>