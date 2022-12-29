<?php 

	class Person 
	{
		const AUTHOR = ""
		var String $name = "Erika";

		function sayHello(?string $name)
		{
			if (is_null($name)) {
				echo "Halo {$this->name}";
			}else{
				echo "Halo {$name}, my name is {$this->name}";
			}
		}
	}



	$person = new Person;
	$person->sayHello(null);