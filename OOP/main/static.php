<?php  

	
	class sayHi
	{
		// STATIC PROPERTY
		static public $name = 'name';

		// STATIC FUNCTION
		static function sum(int ...$numbers):int
		{
			$total = 0;

			foreach ($numbers as $number) {
				$total += $number;
			}
			return $total;
		}
	}

	$person = new sayHi;
	// echo($person->name); // ini akan error

	/*Ini adalah cara untuk memanggil properti static*/
	echo(sayHi::$name).PHP_EOL;
	sayHi::$name = 'irwan'.PHP_EOL; 
	echo(sayHi::$name);

	echo(sayHi::sum(10,10,20));