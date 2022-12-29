<?php 

	require_once 'clases.php';
	require_once 'twin.php';
	require_once 'flower.php';

	use Clases\Person;
	use const Clases\AUTHOR;
	use function Clases\sayHi;

	use Twin\one\Person1;
	use Twin\two\Person2;

	// INI ADALAH ALIAS, YAITU MENGGANTI NAMA CLASS / CONST/ FUNCTION YANG BERNAMA SAMA MENJADI NAMA YANG LAIN
	use Flower\one\sunFlower as sunFlower1;
	use Flower\two\sunFlower as sunFlower2;

	$person = new Person;
	$person1 = new Person1;
	$person2 = new Person2;
	$sunFlower1 = new sunFlower1;
	$sunFlower2 = new sunFlower2;


	// echo(AUTHOR).PHP_EOL;
	// sayHi();