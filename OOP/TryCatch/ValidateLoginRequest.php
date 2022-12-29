<?php 

	function validateLoginRequest(LoginRequest $request)
	{
		if (!isset($request->username)) {

			throw new LoginRequestException("Your username is null".PHP_EOL);

		}elseif (!isset($request->password)) {

			throw new LoginRequestException("Your password is null".PHP_EOL);

		}elseif (trim($request->username == "")) {

			throw new Exception("Your username is empty".PHP_EOL);

		}elseif (trim($request->password == "")) {
			throw new Exception("Your password id empty".PHP_EOL);
			
		}

	}