<?php 
	
	require_once 'LoginRequest.php';
	require_once 'ValidateException.php';
	require_once 'ValidateLoginRequest.php';

	$loginRequest = new LoginRequest;
	$loginRequest->username = 'Aku';
	$loginRequest->password = 'Kamu';

	validateLoginRequest($loginRequest);
	echo "Berhasil login!".PHP_EOL;