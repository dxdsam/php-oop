<?php 

	class Hewan 
	{
		/*
			# PROPERTIES OVERLOADING
			* __get($name)
				function ini akan dijalankan jika kita mengakses properti tidak ada

			* __set($name, $value)
				function ini akan dijalankan jika kita mengeset properti tidak ada

			* __isset($name)
				function ini akan dijalankan jika kita melakukan isset pada properti tidak ada

			* __unset($name)
				function ini akan dijalankan jika kita melakukan unset properti tidak ada

		*/

		private array $properties = [];

		public function __get($name)
		{
			return $this->properties[] = $name;
		}

		public function __set($name,$value)	
		{
			return $this->properties[$name] = $value;
		}

		public function __isset($name): bool
		{
			return isset($this->properties[$name]);
		}

		public function __unset($name)
		{
			unset($this->properties[$name]);
		}
	}

	$hewan = new Hewan;
	// get
	echo($hewan->kucing).PHP_EOL;
	// set
	echo($hewan->nama = 'Anjing').PHP_EOL;	
	// isset
	echo(isset($hewan->nama)).PHP_EOL;
	// unset
	echo(unset($hewan->jenis));