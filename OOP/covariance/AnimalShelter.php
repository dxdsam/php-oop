<?php 

	namespace Data;
	require_once 'Animal.php';

	interface AnimalShelter
	{
		function adopt($name): Animal;
	}

	class CatShelter implements AnimalShelter
	{
		public function adopt($name): Cat
		{
			$cat = new Cat;
			$cat->name = $name;
			return $cat;
		}
	}

	class DogShelter implements AnimalShelter
	{
		public function adopt($name): Dog
		{
			$dog = new Dog;
			$dog->name = $name;
			return $dog;
		}
	}