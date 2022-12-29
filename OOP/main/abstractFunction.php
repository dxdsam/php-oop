<?php 

	abstract class Animal
	{
		public $name;
		abstract function run($name):void;
	}

	class Cat extends Animal
	{
		function run($name):void
		{
			echo "Halo $name".PHP_EOL;
		}
	}

	class Dog extends Animal
	{
		function run($name):void
		{
			echo "Halo $name".PHP_EOL;
		}
	}

	$cat = new Cat;
	$cat->run('Rifal');
	$dog = new Dog;
	$dog->run('Gifar');


