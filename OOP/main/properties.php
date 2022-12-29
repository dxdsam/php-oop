<?php 

	
	class Person
	{
		// Property Type Declaration
		var String $name;
		// Nullable property
		var ?String $addres = "Jakarta";
		// Default value property
		var $country = "Indonesia";
	}

	$person = new Person;
	var_dump($person);
