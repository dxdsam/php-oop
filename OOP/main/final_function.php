<?php 
	

	class Animal
	{
		public string $name = 'Kucing';

		/*
			Dengan menggunakan keyword pada function,
			maka ketika class child mengoveride function akan terjadi eror
		*/ 
		final public function getNama()
		{
			return $this->name;
		}
	}

	class Cat extends Animal
	{
		public string $name = 'Cat';
		/*
		
		# INI AKAN ERROR

		final public function getNama()
		{
			return $this->name;
		}
		
		*/
	}

	$cat = new Cat;
	var_dump($cat->getNama());


