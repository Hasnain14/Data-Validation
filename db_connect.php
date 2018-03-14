<?php
	
	$user = "root";
	$pass = "";
	$db = "data_validation";

	$con_db =  mysqli_connect('localhost', $user, $pass, $db);

	if(!$con_db){
		echo "error";
	}
	
 ?>