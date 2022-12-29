<?php 

	class Programmer
	{
		public $name;
		public function __construct($name)
		{
			$this->name = $name;
		}
	}

	class BeProgrammer extends Programmer
	{

	}

	class FeProgrammer extends Programmer
	{

	}

	class DatabaseAdmin
	{
		public $name;
		public function __construct($name)
		{
			$this->name = $name;
		}
	}

	function sayHelloProgrammer($programmer)
	{
		if ($programmer instanceof Programmer) {
			echo "Halo programmer $programmer->name".PHP_EOL;
		}elseif ($programmer instanceof BeProgrammer) {
			echo "Halo Backend programmer $programmer->name".PHP_EOL;
		}elseif ($programmer instanceof FeProgrammer) {
			echo "Halo Frontend programmer $programmer->name".PHP_EOL;
		}else{
			echo "Kamu bukan seorang programmer!";
		}
	}

	// $programmer = new Programmer('Eriko');
	sayHelloProgrammer(new Programmer('Toni'));
	sayHelloProgrammer(new BeProgrammer('Boni'));
	sayHelloProgrammer(new DatabaseAdmin('Gifar'));




