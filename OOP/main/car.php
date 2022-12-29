<?php 

	class Car 
	{
		public function Maju(): void
		{
			echo "Mobil telah maju 500m".PHP_EOL;
		}
	}

	class Toyota extends Car
	{
		public function Maju(): void
		{
			echo "Mobil telah maju 100m".PHP_EOL;
		}	

		public function parentMaju()
		{
			return parent::Maju();
		}
	}


	$car = new Car;
	$car->Maju();

	$toyota = new Toyota;
	$toyota->Maju();
	$toyota->parentMaju();





	// ini adalah cara membuat class
	class Car
	{
		
	}

	// ini adalah cara membuat objek
	$mobil = new Mobil;

