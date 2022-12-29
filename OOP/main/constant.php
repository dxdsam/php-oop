<?php 

	class Person
	{
		const AUTHOR = "LOGGIS SAMJAYA";

		var String $name;

		function callName($name)
		{
			echo "Hallo $name";
		}
	}


	$person = new Person;
	var_dump(Person::AUTHOR);

