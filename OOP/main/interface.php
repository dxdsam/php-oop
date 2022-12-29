<?php 
	
	/*
		# Untuk menggunakan interface kita diharuskan menggukanan keyword interface
		Dan untuk mengimplementasikan interface yang kita buat kita dapat
		menggunakan keyword implements
		
		# Class yang sudah mengimplementasikan interface yang sudah dibuat, masih dapat
		Mengextends class yang lain 

		# Kita juga dapat menimplements lebih dari satu interface	
	*/

	interface Car 
	{
		function run():void;
		function maju():void;
		function mundur():void;
	}

	interface Speed
	{
		function tambahKecepatan():void;
		function kurangiKecepatan():void;
	}

	class CleanUp
	{
		public function __construct()
		{
			echo "Mobil sudah dibersihkan!".PHP_EOL;
		}
	}

	class Avanza extends CleanUp implements Car,Speed
	{
		public function run():void
		{
			echo "Mobil sudah jalan".PHP_EOL;
		}

		public function maju():void
		{
			echo "Mobil sudah maju".PHP_EOL;
		}

		public function mundur():void
		{
			echo "Mobil sudah mundur".PHP_EOL;
		}

		public function tambahKecepatan():void 
		{
			echo "Mobil bertambah cepat".PHP_EOL;
		}

		public function kurangiKecepatan():void 
		{
			echo "Mobil berkurang cepat".PHP_EOL;
		}
	}


	$avanza = new Avanza;
	$avanza->run();
	$avanza->maju();
	$avanza->mundur();
	$avanza->tambahKecepatan();
	$avanza->kurangiKecepatan();