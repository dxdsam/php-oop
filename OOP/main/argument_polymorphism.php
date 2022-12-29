<?php
	
	class Mobil
	{
		public function __construct()
		{
			echo "Ini adalah objek mobil";
		}
	}

	class Mustang extends Mobil
	{
		public function __construct()
		{
			echo "Ini adalah objek mobil Mustang".PHP_EOL;
		}
	}


	class Toyota extends Mobil
	{
		public function __construct()
		{
			echo "Ini adalah objek mobil Toyota".PHP_EOL;
		}
	}

	class Tesla 
	{
		public Mobil $Mobil;
		public function __construct(Mobil $jenis)
		{
			$this->mobil = $jenis;
		}
	}

	$tesla = new Tesla(new Toyota);
	
	