<?php 

	class Person
	{
		/*
			# FUNCTION OVERIDING
			* __call($name, $arguments)
				function ini akan dijalankan jika function yang dipanggil tidak ada di dalam class

			*__callStatic($name, $arguments)
				function ini akan dijalankan jika function static yang dipanggil tidak ada di dalam class
		*/ 
		public function __call($name, $arguments)
		{
			$join = join(',', $arguments);
			echo "Call function $name with arguments $join".PHP_EOL;
		}

		public static function __callStatic($name, $arguments)
		{
			$join = join(',', $arguments);
			echo "Call static function $name with arguments $join".PHP_EOL;
		}
	}


	$person = new Person;
	$person->bio('agus','jakarta','18 tahun');

	Person::bio('rifki','tangerang','19 tahun');