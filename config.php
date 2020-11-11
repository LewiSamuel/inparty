<?php
	define('HOST','g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
	define('USER','tcj0pi0c3w3g1bu6');
	define('PASS','ty6dlcysmpby40o8');
	define('BASE','hymypjl5afe62vm1');

	$conn = new mysqli(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno()){
		printf("Conexão error: ",mysqli_connect_error());
		exit;
	}

	if (session_status() == PHP_SESSION_NONE) {
	    @session_start();
	}
?>