<?php
	define('HOST','us-cdbr-iron-east-05.cleardb.net');
	define('USER','bb3e300bae200c');
	define('PASS','8e5aefad');
	define('BASE','heroku_13b2bb614c9c900');
	
	$conn = new mysqli(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno()){
		printf("Conexão error: ",mysqli_connect_error());
		exit;
	}

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
?>