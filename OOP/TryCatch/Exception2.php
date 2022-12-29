<?php 

	require_once 'LoginRequest.php';
	require_once 'LoginRequestException.php';
	require_once 'ValidateLoginRequest.php';

	$loginRequest = new LoginRequest;
	$loginRequest->username = 'satu';
	$loginRequest->password = 'satu';

	/* BISA BEGINI */ 
	// try {
	// 	validateLoginRequest($loginRequest);
	// } catch (LoginRequestException $e) {
	// 	echo($e->getMessage());
	// } catch (Exception $e) {
	// 	echo($e->getMessage());
	// }

	/*ATAUPUN BEGINI*/ 
	try {
		validateLoginRequest($loginRequest);

		echo "Validation Success".PHP_EOL	;

	} catch (LoginRequestException | Exception $e) {

		echo($e->getMessage());
		
	}finally {
		echo "Error ataupun tidak, ini akan di eksekusi!";
	}


