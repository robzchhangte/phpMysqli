<?php 

	$host		= "localhost";
	$user		= "root";
	$password	= "";

	$conn	=	mysqli_connect($host, $user, $password);
	$db = mysqli_select_db($conn, 'cms');
	
	if($conn && $db) {
		echo "Hola";
	}

	else {
		echo "Couldn't connect to database";
	}

?>