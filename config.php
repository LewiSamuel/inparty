<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','root');
	define('BASE','inparty');
	
	$conn = new mysqli(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno()){
		printf("Conexão error: ",mysqli_connect_error());
		exit;
	}

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
?>