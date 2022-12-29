<?php 
	namespace Data;

	abstract class Location
	{
		public $name = 'rina';
	}

	class Person extends Location
	{

	}

	// $location = new Location; //ERROR
	$person = new Person;
	var_dump($person->name);


