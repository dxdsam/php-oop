<?php 

	class Car 
	{
		public $roda = 4;
		public $name;
		private $tahun;

		public function __debugInfo(): Array
		{
			return [
				"name" => $this->name,
				"roda" => $this->roda,
				"tahun" => $this->tahun
			];
		}

	}

	$car = new Car;
	var_dump($car);