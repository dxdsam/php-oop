<?php 

	class Person
	{
		var String $name;

		function callName($name)
		{
			echo "Hallo $name";
		}
	}

	$person = new Person;
	$person->callName('Boni');