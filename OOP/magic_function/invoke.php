<?php 

	class Motors
	{
		public $name;
		public $tahun;

		#___ ini adalah cara untuk membuat magic function invoke
		#
		/*
			invoke merupakan function yang dieksekusi ketika object yang kita buat
			dianggap sebagai function

			misal saat kita membuat object motor, lalu jika kita melakukan $motor(),
			maka secara otomatis function __invoke ini akan dieksekusi
		*/ 
		#
		public function __invoke(...$arguments): void
		{
			$join = join(", ", $arguments);
			echo "Invoke student with arguments $join".PHP_EOL;
		}

	}

	$motor = new Motors;
	$motor(1, "Irwan", true);