<?php 

	trait SayHi
	{
		public function SayHi(String $name)
		{
			echo "Halo $name".PHP_EOL;
		}
	}

	trait SayGoodBye
	{

		public function SayGoodBye(String $name)
		{
			echo "Goodbye $name".PHP_EOL;
		}
	}

	class ParentPerson
	{
		// Ini adalah function yang sudah ada pada trait
		public function SayHi(String $name)
			{
			echo "Hi $name".PHP_EOL;
		}

		// Ini adalah function yang sudah ada pada trait
		public function SayGoodBye(String $name)
		{
			echo "See you later $name".PHP_EOL;
		}
	}

	class Person extends ParentPerson
	{
		/*
			Jika kita membuat function yang sama pada trait, maka secara otomatis
			kita mengoveride function pada trait
		*/

		/*
			kita juga bisa mengoveride visibility pada trait
			seperti berikut ini

			use SayHi,SayGoodBye{
			SayGoodBye as private;

			}
		*/

			use SayHi,SayGoodBye;


		// Ini adalah function yang sudah ada pada trait
		// public function SayHi(String $name)
		// 	{
		// 	echo "Hi $name".PHP_EOL;
		// }

		// // Ini adalah function yang sudah ada pada trait
		// public function SayGoodBye(String $name)
		// {
		// 	echo "See you later $name".PHP_EOL;
		// }
	}

	$person = new Person;
	$person->SayHi('Ferdi');
	$person->SayGoodBye('Vikri');