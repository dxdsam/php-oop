<?php 
	
	interface Sample 
	{
		function sayHello(): void;
	}


	/*Ini adalah cara biasa untuk membuat objek*/ 
	class Cat 
	{
		public String $jenis = 'jawa'.PHP_EOL;
	}

	class Anggora extends Cat
	{

	}

	$anggora = new Anggora;

	/*
		Ini adalah cara membuat annonymous class
		Dengan menggunakan annomymous class kita tidak perlu lagi,
		membuat class dan objek secara terpisah
	*/

	$persia =  new class extends Cat {

	};

	echo($persia->jenis);


	$person = new class implements Sample {
		public function sayHello(): void 
		{
			echo "Hello";
		}
	};


	$person->sayHello();

