<?php 

	trait SayHi
	{
		public $dog = 'Doggy';

		function SayHi(?string $name):void 
		{
			if (is_null($name)) {
				echo "Goodbye";
			}else{
				echo "Halo $name";
			}
		}
	}

	trait Run 
	{
		// ini adalah abstract function pada trait
		public abstract function run():void;
	}


	class Person
	{
		use SayHi;
		use Run;

		public function run():void
		{
			echo "Ini adalah abstract function yang berada pada trait run".PHP_EOL;
		}
	}

	$person = new Person;
	$person->SayHi(null);
	$person->run();
	var_dump($person);