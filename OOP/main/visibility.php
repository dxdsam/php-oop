<?php 

	class Animal
	{
		public $foot = 4;
		protected $food;
		protected $jenis;

		public function __construct(int $foot, string $food, string $jenis)
		{
			$this->foot = $foot;
			$this->food = $food;
			$this->jenis = $jenis;
		}

		public function getFoot()
		{
			echo "Hewan ini berkaki $this->foot";
		}



	}

	class Makanan extends Animal
	{
		public function getFood()
		{
			echo "Hewan ini memakan $this->food";
		}
	}

	class Jenis extends Animal
	{
		public function getJenis()	
		{
			echo "Hewan ini berjenis $this->jenis";
		}
	}

	$animal = new Animal(4,'daging','karnivora');
	$makanan = new Makanan('2','daging','karnivora');
	$jenis = new Jenis('2','sayur','herbivora');
	$makanan->getFood();
	$jenis->getJenis();

