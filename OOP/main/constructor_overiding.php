<?php 

	class Mobil
	{
		public function __construct(int $jarak)
		{
			echo "Mobil ini sudah berjalan sejauh $jarak km".PHP_EOL;
		}

		// public function Jalan(int $jarak): String
		// {
		// 	return "Mobil berjalan sejauh $jarak km";
		// }
	}

	class Tesla extends Mobil
	{
		// INI ADALAH CONSTRUCTOR OVERIDING 
		/*
			Yaitu mendefinisikan ulang method atau function constructor
			yang berada pada class parent
		*/
		public function __construct(float $jarak)
		{
			echo "Mobil ini sudah jalan sejauh $jarak km".PHP_EOL;
		}

		// public function Jalan(int $jarak): String
		// {
		// 	return "Mobil sudah berjalan sejauh $jarak km";
		// }
	}

	class Toyota extends Mobil
	{

		public function __construct(int $jarak)
		{
			// Atau juga bisa seperti ini
			// Tidak wajib tapi direkomendasikan
			parent::__construct($jarak);
		}
	}

	// $tesla = new Tesla;
	// $tesla->Jalan();

	$tesla = new Tesla(0.5);
	$toyota = new Toyota(45);
	var_dump($tesla);
	var_dump($toyota);

