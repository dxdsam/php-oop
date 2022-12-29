<?php 

	$name = [
		"firstName" => "Loggis",
		"lastName" => "Samjaya"
	];

	$object = (object)$name;
	var_dump($object);

	$array = (array)$object;
	var_dump($array);


	class Person
	{
		public $firstName = "Rifki";
		public $lastName = "Haryadi";
	}

	$person = new Person;

	$orang = (array)$person;
	var_dump($orang);